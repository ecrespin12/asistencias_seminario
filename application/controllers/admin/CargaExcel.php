<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'/third_party/Spout/Autoloader/autoload.php';

 use Box\Spout\Reader\ReaderFactory;  
 use Box\Spout\Common\Type;

  //Con las lineas anteriores cargamos la librería

 class CargaExcel extends  CI_Controller{

      function __construct() {
        
         parent::__construct();
			
			//verificar la session de usuario, si se ha logueado
			if(!$this->session->userdata("login")){
					redirect(base_url());
			}

			//llamar models desde su carpeta
			$this->load->model("admin/SeminarioModel");
      }

      public function index(){

         $this->load->view('layouts/header');
         $this->load->view('layouts/aside');
         $this->load->view('admin/seminarios/add_seminarios');
         $this->load->view('layouts/footer');
         $this->load->view('layouts/scripts/adm_seminario');

      }

       public function guardarExcel() {


         if (!empty($_FILES['file']['name'])) {

            $pathinfo = pathinfo($_FILES["file"]["name"]);

            if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') && $_FILES['file']['size'] > 0 ) {

               // Nombre Temporal del Archivo
               $inputFileName = $_FILES['file']['tmp_name']; 

               //Lee el Archivo usando ReaderFactory
               $reader = ReaderFactory::create(Type::XLSX);

                //Esta linea mantiene el formato de nuestras horas y fechas
                //Sin esta linea Spout convierte la hora y fecha a su propio formato
                //predefinido como DataTime
                 $reader->setShouldFormatDates(true);

                // Abrimos el archivo
                $reader->open($inputFileName);
                $count = 1;

               //Numero de Hojas en el Archivo
               foreach ($reader->getSheetIterator() as $sheet) {

                  // Numero de filas en el documento EXCEL
                  foreach ($sheet->getRowIterator() as $row) {

                     // Lee los Datos despues del encabezado
                     // El encabezado se encuentra en la primera fila
                     if($count > 1) {
                     
                        $data = array(

                           //rut_usu, fecha_ini, y fecha_ter son imputs del formulario
                           //no se encuentran en el archivo EXCEL
                           //los estoy capturando por POST

                           'facultad' => $row[0],
                           'escuela' => $row[1],
                           'codigoSeminario' => $row[2],
                           'nombre' => $row[3],
                           'codigoPonente' => $row[4],
                           'nombrePonente' => $row[5],
                           'fecha' => $row[6],
                           'horario' => $row[7],
                           'aula' => $row[8],
                           'cupo' => $row[9]
                     
                        ); 

                 
                        $this->SeminarioModel->insertSeminarioExcel($data);
                     } 
                      $count++;
                  }
               }

                  // cerramos el archivo EXCEL
                  $reader->close();

                  $this->session->set_flashdata("exitoSem", "exit");
                  redirect(base_url() . "admin/CargaExcel");

            } 
            else {

                echo "Seleccione un tipo de Archivo Valido";
             }

         } 
         else {

            echo "Seleccione un Archivo EXCEL";
         }


      }
      


}


?>