<?php
//echo exec("sudo python /var/www/webRaspberriPI/GPIO/2/activar.py");

// Funciones PHP del pin GPIO 2
	if ($_POST[Activar2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/activar.py");
		echo $a;
	}

	if ($_POST[Desactivar2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/apagar.py");
		echo $a;
	}

	if ($_POST[UNparpadeo2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/1parpadeo.py");
		echo $a;
	}

	if ($_POST[Parpadear2]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/2/parpadear.py");
		echo $a;
	}
// Fin de las funciónes del pin GPIO 2
		
// Funciones PHP del pin GPIO 3
	if ($_POST[Activar3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/activar.py");
		echo $a;
	}

	if ($_POST[Desactivar3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/apagar.py");
		echo $a;
	}

	if ($_POST[UNparpadeo3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/1parpadeo.py");
		echo $a;
	}

	if ($_POST[Parpadear3]) { 
		$a=exec("sudo python /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/GPIO/3/parpadear.py");
		echo $a;
	}
// Fin de las funciónes del pin GPIO 3
?>
