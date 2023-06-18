<?php

include_once 'class/estudiantes.php';


class EstudiantesModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getEstudiantes(){
        $items = [];

        try {
         
            $stringSQL = "SELECT * FROM `estudiante` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);
                // aqui se empieza a recorrer cada registro y la vez se crean un objeto por registro de la clase classCursos
            while ( $row = $query->fetch()){
                $item = new classEstudiantes();
                
                foreach ($row as $key => $value) {//aqui  se empieza a recorrer un registro en especifico y se le asigna el valor correspondiente
                   
                    $item->$key = $value;
                }
                array_push($items, $item);//aqui se asigna el registro especifico al array 
            }
            return $items;//aqui ya se devuelven todos los registros
        } catch (PDOException $th) {
          
            return [];
        }
    }

     public function insertarEstudiante($datos){
         try {
              $datos['id'] = "0";
              $datos['usuario'] = "Prof Mario";
             $stringSQL = 'INSERT INTO estudiante(id, cedula, correoelectronico, telefono, telefonocelular, fechanacimiento, sexo, direccion, nombre, apellidopaterno, apellidomaterno, nacionalidad, idCarreras, usuario) VALUES (:id,:cedula,:correoelectronico, :telefono,:telefonocelular,:fechanacimiento,:sexo,:direccion,:nombre,:apellidopaterno,:apellidomaterno,:nacionalidad,:idCarreras,:usuario);';
             $query = $this->db->connect()->prepare($stringSQL);
             $query->execute($datos);
             return true;

         } catch (PDOException $th) {
            return false;
         }
     }

     public function verEstudiantes($id){
      

         try {
            //  code...
             $item = new classEstudiantes();
             $stringSQL = "Select * FROM `estudiante` where id=:id;";
             $query = $this->db->connect()->prepare($stringSQL);
             $query->execute(['id' =>$id]);

             while ( $row = $query->fetch()){//obtiene la filas
                

                 foreach ($row as $key => $value) {
                     # code...
                     $item->$key = $value;
                 }
                
             }
             return $item;
         } catch (PDOException $th) {
             throw $th;
             return [];
         }

     }


       
          public function actualizarestudiante($datos){
                   
                    try {
                                       
                        $datos['usuario'] = "Prof Mario";
                        $stringSQL =  'UPDATE estudiante SET cedula=:cedula,correoelectronico=:correoelectronico,telefono=:telefono,telefonocelular=:telefonocelular,fechanacimiento=:fechanacimiento,sexo=:sexo,direccion=:direccion,nombre=:nombre,apellidopaterno=:apellidopaterno,apellidomaterno=:apellidomaterno,nacionalidad=:nacionalidad,idCarreras=:idCarreras,usuario=:usuario WHERE  id=:id ;';

               

                        $query = $this->db->connect()->prepare($stringSQL);
                        $query->execute($datos);
                        return true;
            
                    } catch (PDOException $th) {
                 
                        return false;
                    }
        } 

        // Eliminar Estudiante
     public function eliminarEstudiante($id){        
         try {            
          
             $stringSQL = "DELETE FROM `estudiante` WHERE id =:id;";
             $query = $this->db->connect()->prepare($stringSQL);
             $query->execute(['id'=>$id]);
            
             return true;
         } catch (PDOException $th) {
             throw $th;
            //  var_dump($th);
             return false;
         }           
     }
}


  

?>