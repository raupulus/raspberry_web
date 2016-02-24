<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Raspberry PI WEB controlador GPIO</TITLE>
		<META CHARSET="utf-8"/>
		<LINK rel="shortcut icon" href="./images/favicon.png"/>
		<LINK rel="stylesheet" href="./style.css"/>
		<SCRIPT src="./scripts.js"></SCRIPT>

	</HEAD>
	
	<BODY id="pines">
		<H1>WEB DE CONTROL RaspberryPI</H1>
<FORM action="funciones.php" method="post">		
		<DIV id="cajamenuprincipal">
			<NAV id="menuprincipal">
				<UL>
					<A href="index.html"><LI>PINES</LI></A>
					<A href="#"><LI>Monitor de Estado</LI></A>
					<A href="#"><LI>Información</LI></A>
					<A href="#"><LI>Actualizar</LI></A>
				</UL>
			</NAV>
		</DIV>
		
		<TABLE id="tablaprincipal">
			<TR>
				<TD>PIN</TD>
				<TD>ACTIVAR</TD>
				<TD>DESACTIVAR</TD>
				<TD>1PARPADEO</TD>
				<TD>PARPADEAR</TD>
				<TD>ESTADO</TD>
			</TR>
			<TR>
				<TD>2</TD>
				<TD>
					
				
					<INPUT type="submit" name="Activar2" value="Activar"/>
					<INPUT type="submit" name="Desactivar2" value="Desactivar"/>
					<INPUT type="submit" name="UNparpadeo2" value="1Parpadeo"/>
					<INPUT type="submit" name="Parpadear2" value="Parpadear"/>
				
					
				</TD>
				<TD><IMG src="images/off.png" alt="Apagar"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD>3
				<!--ACCIONES PARA GPIO3-->
			<INPUT type="submit" name="Activar3" value="Activar"/>
			<INPUT type="submit" name="Desactivar3" value="Desactivar"/>
			<INPUT type="submit" name="UNparpadeo3" value="1Parpadeo"/>
			<INPUT type="submit" name="Parpadear3" value="Parpadear"/>
				</TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/off.png" alt="Apagar"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD></TD>
			</TR>
			<TR>
				<TD>4</TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/off.png" alt="Apagar"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD><IMG src="images/on.png" alt="Encender"/></TD>
				<TD></TD>
			</TR>
		</TABLE>
</FORM>
	</BODY>
</HTML>

		