<?php
include 'template/header2.php';
?>
<section id="two" class="wrapper style2">
                <div class="inner">
                    <div class="box">
                        <div class="content">
                            <header class="align-center">
                                <p>Bienvenidos a bocadeli GUAPOS</p>
                                <h2>Registrate</h2>
                            </header>
    <form action="ValidarRegistro.php" method="post">
    
    <div class="form-group">
      <label for="userName">Nombre:</label>
      <input type="text" class="form-control" name="txt_name" id="Nombre" placeholder="Ingrese su nombre">
    </div>

    
    <div class="form-group">
      <label for="userCorreo">correo</label>
      <input type="text" class="form-control" name="txt_correo" id="correo" placeholder="Ingrese su correo">
    </div>

    

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" name="txt_pwd" placeholder="Enter password">
    </div>

    

    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Guardar</button>
  </form>

  </div>
					</div>
				</div>
			</section>
  <?php
include 'template/footer.php';

?>