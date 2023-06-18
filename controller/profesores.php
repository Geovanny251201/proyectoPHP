<?php
class Profesores extends Controller{
    function __construct(){
        parent::__construct();
        parent::connectionSession();

        $this->view->datos = [];
        $this->view->mensaje = "Seccion Profesores";
        $this->view->mensajeResultado = "";        
    }
    function render(){
        $datos = $this->model->getProfesores();               
        $this->view->datos = $datos;
        $this->view->render('profesores/index');
    }

    function crear(){   //para ver la vista                   
        $this->view->datos = [];
        $this->view->mensaje = "Añadir Profesores";
        $this->view->render('profesores/crear');
    }

    function insertarProfesores(){
       
        if ($this->model->insertarProfesores($_POST)){
            $mensajeResultado = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    Profesor Agregado
                </div>';
        }else{
            $mensajeResultado = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    No se registro el profesor
                </div>';
        }
        $this->view->mensajeResultado = $mensajeResultado;        
        
        $this->render();
    }

    function detalle(){                      
        $this->view->datos = [];
        $this->view->mensaje = "Detalles del Profesor";
        $this->view->render('profesores/detalle');
    }

    function verProfesores($param=null ){
        $id=$param[0];

        $datos=$this->model->verProfesores($id);
       
        $this->view->datos = $datos;
        $this->view->mensaje = "Detalle Curso";
        $this->view->render('profesores/detalle');



    }

        //actualizarcurso
        function actualizarProfesores(){
           
            if ($this->model->actualizarProfesores($_POST)){
    
                $datos = new classProfesores();
    
                foreach ($_POST as $key => $value) {
                    # code...
                    $datos->$key= $value;
                }
    
                $mensajeResultado = '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        Actualizacion de Registro
                    </div>';
            }else{
                $mensajeResultado = '
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        No se actualizo el Registro
                    </div>';
            }
            $this->view->datos = $datos;
            
            $this->view->mensaje = "Detalle Profesores";
            $this->view->mensajeResultado = $mensajeResultado;        
            $this->view->render('profesores/detalle');
        } 

         function eliminarProfesores( $param = null ){   
             $id = $param[0];
             if ($this->model->eliminarProfesores($id)){
                 $mensajeResultado = '
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         Se elimino el Registro
                     </div>';
             }else{
                 $mensajeResultado = '
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         No se elimino el Registro
                     </div>';
             }
             $this->view->mensajeResultado = $mensajeResultado;        
             $this->render();
         }

}

?>