<?php

include_once 'class/cursos.php';


class CursosModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function getCursos(){
        $items = [];

        try {
         
            $stringSQL = "SELECT * FROM `curso` order by id DESC;";
            $query = $this->db->connect()->query($stringSQL);
                // aqui se empieza a recorrer cada registro y la vez se crean un objeto por registro de la clase classCursos
            while ( $row = $query->fetch()){
                $item = new classCursos();
                
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

    public function insertarCurso($datos){
        try {
            $datos['id'] = "0";
            $datos['usuario'] = "Prof Mario";
            $stringSQL = 'INSERT INTO curso(id, nombre, descripcion, tiempo, usuario) VALUES ( :id, :nombre, :descripcion, :tiempo, :usuario);';
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute($datos);
            return true;

        } catch (PDOException $th) {
           return false;
        }
    }

    public function verCursos($id){
      

        try {
            //code...
            $item = new classCursos();
            $stringSQL = "Select * FROM `curso` where id=:id;";
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
            //throw $th;
            return [];
        }

    }


       
          public function actualizarcurso($datos){
                   
                    try {
                                       
                        $datos['usuario'] = "Prof Mario";
                        $stringSQL = 'UPDATE curso SET nombre=:nombre,descripcion=:descripcion,tiempo=:tiempo,usuario=:usuario WHERE id=:id ;';
                        $query = $this->db->connect()->prepare($stringSQL);
                        $query->execute($datos);
                        return true;
            
                    } catch (PDOException $th) {
                        //throw $th;
                        var_dump($th);
                        return false;
                    }
        } 

       //eliminarcurso
    public function eliminarcurso($id){        
        try {            
            //code...
            $stringSQL = "DELETE FROM `curso` WHERE id =:id;";
            $query = $this->db->connect()->prepare($stringSQL);
            $query->execute(['id'=>$id]);
            
            return true;
        } catch (PDOException $th) {
            //throw $th;
            var_dump($th);
            return false;
        }           
    }
}


  

?>