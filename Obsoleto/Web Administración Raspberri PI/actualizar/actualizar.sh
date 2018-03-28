#!/bin/bash

#Script para autoactualizar este repositorio con git mediante la interfaz web, php y función exec
#Actualizar lista de repositorios después de sincronizar con git
#Añadir también actualización del software (aptitude)
#Añadir actualización del firmware
#Añadir actualización del sistema completo (aptitude safe-upgrade)

#Variables Generales
temp="/tmp/fryntizMenuShell/"
git=".git"
VersionActual="beta0.1 creando la base del menú"

##### CONSTANTES COLORES #####
negro="\033[0;30m"
rojo="\033[0;31m"
verde="\033[0;32m"
marron="\033[0;33m"
azul="\033[0;34m"
magenta="\033[0;35m"
cyan="\033[01;36m"
grisC="\033[0;37m"
gris="\033[1;30m"
rojoC="\033[1;31m"
verdeC="\033[1;32m"
amarillo="\033[1;33m"
azulC="\033[1;34m"
magentaC="\033[1;35m"
cyanC="\033[1;36m"
blanco="\033[1;37m"
subrayar="\E[4m"
parpadeoON="\E[5m"
parpadeoOFF="\E[0m"
resaltar="\E[7m"

#Script para Actualizar
#Comprobado funcionamiento solo en Debian rama Estable
#Único idioma disponible de momento ESPAÑOL de ESPAÑA

clear;
###Entrando o creando el directorio donde se instalará o actualizará /var/www
if [ -d "/var/www/webRaspberriPI" ]
    then
        echo "Entrando al directorio /var/www/webRaspberriPI"
        cd /var/www/webRaspberriPI
        sleep 1
        clear
    else
        echo -e "Creando el directorio que no existe /var/www/webRaspberriPI"
        mkdir /var/www/webRaspberriPI
        sleep 1
        echo -e "Entrando al directorio cd /var/www/webRaspberriPI"
        cd /var/www/webRaspberriPI
fi


###ACTUALIZANDO VERSIÓN DESDE GIT
#Comprobar versión
echo -e "$verdeC               Versión actual: $rojoC$VersionActual$grisC"
echo ""
echo -e "$verdeC        Descargando contenido$grisC"
#Condicional if: -d para comprobar si existe dir y -f para archivos -x permisos de ejecución
if [ -d ".git" ]
    then
        echo -e "$rojoC El repositorio git si está inicializado$grisC"
        git add *
        git commit -a -m "auto dev server commit"
        git fetch origin master
        git merge -s recursive -X theirs origin/master
        clear
        git pull origin master
    else
        echo -e "$rojoC .git No existe$grisC"
        git init
        git remote add origin https://github.com/fryntiz/Raspberry-PI
        git add *
        git commit -a -m "auto dev server commit"
        git fetch origin master
        git merge -s recursive -X theirs origin/master
        clear
        git pull origin master
fi

clear
###Actualizar lista de repositorios
sudo aptitude update

###Actualizar firmware y Kernel
sudo rpi-update

###Actualizar programas
sudo aptitude upgrade

###Actualizar versión completa del sistema
sudo aptitude safe-upgrade

echo -e "$amarillo Aún estamos en pruebas y es muy probable que falle el actualizador automático$grisC"
