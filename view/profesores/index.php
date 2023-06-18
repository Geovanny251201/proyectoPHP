<?php
    require 'view/header.php';
    require 'view/menu.php';
?>
<div class="container-fluid" id="contenedorprincipal">
    <h1><?php echo $this->mensaje;?></h1>
    
    <?php echo $this->mensajeResultado ?>
    <div class="table-responsive">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-secondary
        align-middle">
            <thead class="table-light">
                <caption><?php echo $this->mensaje;?></caption>
                <tr>
                    <th>Id</th>
                    <th>Cedula</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Telefono Celular</th>
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>            
                    <th>Direccion</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nacionalidad</th>
                    <th>Id Carreras</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php 
                        foreach ($this->datos as $row) {

                            $datos = new classProfesores();
                            $datos = $row;
                            # code..
                            echo ' <tr class="table-secondary" >
                                    <td scope="row">'.$datos->id.'</td>
                                    <td>'.$datos->cedula.'</td>
                                    <td>'.$datos->correoelectronico.'</td>
                                    <td>'.$datos->telefono.'</td>
                                    <td>'.$datos->telefonocelular.'</td>
                                    <td>'.$datos->fechanacimiento.'</td>
                                    <td>'.$datos->sexo.'</td>
                                    <td>'.$datos->direccion.'</td>
                                    <td>'.$datos->nombre.'</td>
                                    <td>'.$datos->apellidopaterno.'</td>
                                    <td>'.$datos->apellidomaterno.'</td>
                                    <td>'.$datos->nacionalidad.'</td>
                                    <td>'.$datos->idCarreras.'</td>
                                    <td>'.$datos->usuario.'</td>
                                    <td>
                                    <a name="eliminar" id="eliminar" class="btn btn-danger" href="'.constant('URL').'profesores/eliminarProfesores/'.$datos->id.'" role="button">Eliminar</a>
                                    ||
                                    <a name="editar" id="editar" class="btn btn-primary" href="'.constant('URL').'profesores/verProfesores/'.$datos->id.'" role="button">Editar</a>
                                </td>
                                </tr>';
                        }
                    ?>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>    
</div>
<?php
    require 'view/footer.php';
?>