<?php
include 'template/header2.php';
?>
<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<h2>Bocadeli GUAPOS</h2>
							</header>
    <form action='validarlogin.php' method='get'>
    <div class="form-group">
      <label for="userl">Email:</label>
      <input type="text" class="form-control" name="usr" id="user" placeholder="Ingrese email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwds" id="pwd" placeholder="Enter password">
    </div>
    <br>
    <button type="submit" class="btn btn-default"  value="Login">Iniciar sesion</button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <a href="Registro.php" ><img src="../img/Registrarseeee.png" width="33px" height="33px" alt="loguito"> Registrarse</a>
  </form>

  </div>
					</div>
				</div>
			</section>
  <?php
include 'template/footer.php';

?>