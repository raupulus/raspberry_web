# Conjuntos de scripts con interfaz WEB para gestionar RaspberriPI
Scripts para la raspberry PI 2 model B en Python

-----------------------------------
--------------ATENCIÓN-------------
-----------------------------------
-Este conjunto de aplicaciones esta diseñado para trabajar en la ruta: /var/www/webRaspberriPI
-Está probado solamente bajo RASPBIAN Jessie.
-Puede contener errores.
-Aún está en fase beta, es un proyecto joven y con poco tiempo de desarrollo.
-No me hago responsable de daños ni mal funcionamiento aunque todos aquellos que sean reportados intentaré repararlos en la mayor brevedad que me sea posible.
-El autoinstalador/actualizador incluido es simplemente un script SH que ejecuta GIT para sincronizar con este mismo repositorio.
-Se admiten colaboradores para este proyecto.
-Se puede redistribuir bajo la misma licencia, GPLv3 por fryntiz (Raúl Caro Pastorino).
-El modelo de la raspberry con el que se ha testeado es: RaspberriPI2 model B

-----------------------------------
------------INSTALACIÓN------------
-----------------------------------
Para instalar descargar este repositorio e incluir en la ruta: /var/www
La interfaz WEB quedará en la ruta: /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/
Localizándose el index.html dentro de esta forma: /var/www/webRaspberriPI/Web\ Administración\ Raspberri\ PI/index.html

Otro modo de instalación es descargar solo el archivo que pone "actualizar.sh" localizado dentro de "Web Administración Raspberri PI" y solo con este archivo lo ejecutamos como "root" de esta forma: "sudo sh actualizar.sh" una vez estemos dentro del directorio.
Este script comprobará si existe instalación en la ruta correcta, en caso de no existir la creará automáticamente e inicializará el repositorio local con git para sincronizar desde github a nuestro clon local. (Es necesario tener instalado git: "apt-get install git").

-----------------------------------
--------------FUTURO---------------
-----------------------------------
Los planes de futuro no están claros al 100% ya que estoy creando esta plataforma (en principio) según las necesidades que me van surgiendo para amenizar tareas.