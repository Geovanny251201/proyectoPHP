<?php 
require 'view/menu.php';
require 'view/header.php';

?>
<div class="container-fluid" id="contenedorprincipal">
    <h1><?php echo $this->mensaje;?></h1>


    <form class="form-control" action="<?php echo constant('URL'); ?>grupos/insertargrupo" method="POST">
        <?php require 'form.php';?>
    </form>
  
</div>

<?php 
require 'view/footer.php'
?>
