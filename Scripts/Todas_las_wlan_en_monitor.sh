#!/bin/bash

#Ver dispositivos de red en el equipo
REDES=`ls  /sys/class/net/ | tr -s " " | grep wlan`
NUM_REDES=`ls  /sys/class/net/ | tr -s " " | grep wlan | wc -l`
MACS=""
LOG="/tmp/all_wlan_monitor.log"

#Mostrar Redes
echo "Redes detectadas:"

function actualizarRedes() {
	echo "Actualizando redes"
	REDES=`ls  /sys/class/net/ | tr -s " " | grep wlan`
	NUM_REDES=`ls  /sys/class/net/ | tr -s " " | grep wlan | wc -l`
}

#Bucle para configurar cada red en modo monitor
for i in $REDES; do
	#ifconfig $i
	echo "$i"
done

#Guardar en array las direcciones MAC de cada red y en otro el nombre de esta sin monitor y con monitor
#Las tarjetas wifis con menos alcance escanean con más frecuencia
#Registrar todo en log
