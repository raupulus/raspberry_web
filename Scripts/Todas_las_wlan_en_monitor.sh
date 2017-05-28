#!/bin/bash

#Ver dispositivos de red en el equipo
REDES=`ls  /sys/class/net/ | tr -s " " | grep wlan`
MACS=""

#Mostrar Redes
echo "Redes detectadas:"

#Bucle para configurar cada red en modo monitor
for i in $REDES; do
	#ifconfig $i
	echo "$i"
done

