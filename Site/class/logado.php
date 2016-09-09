<?php
session_start();

	if(isset(S_SESSION['logado'])):
	?>

		Bem Vindo <?php echo $_SESSION['cliente']; ?>

	<?php

	else:
		echo "Fazer o login!";

	endif;

