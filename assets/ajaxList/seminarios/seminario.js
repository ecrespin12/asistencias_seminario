document.querySelector('#guardar').addEventListener('click', getSeminarios());

function getSeminarios() {
    console.log("ingreso a funcion");

    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', 'http://localhost/asistencias_seminarios/admin/Seminario_api/listSeminarios', true);
    xhttp.send();
    xhttp.onreadystatechange=function() {

        if(this.readyState==4 && this.status ==200){
            //console.log(this.responseText);

            let datos =JSON.parse(this.responseText);
            //console.log(datos);
            let resp = document.querySelector('#resp');
            resp.innerHTML='';

            for(let item of datos){
                //console.log(item.nombre);
                resp.innerHTML+= `
            
                <tr>
                <td>${item.codigoSeminario}</td>
                <td>${item.nombre}</td>
                <td>${item.nombrePonente}</td>
                <td>${item.fecha}</td>
                <td>${item.horario}</td>
                <td>${item.aula}</td>
                <td>${item.cupo}</td>
                <td>
                    <button class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modal-edit-seminario" ><span class="fas fa-pencil-alt"></span></button> 
                    <button class="btn btn-sm btn-danger" type="button"><span class="fas fa-trash-alt"></span></button> 
                </td>
            </tr>
                
                `
            }
        }
    }
}


