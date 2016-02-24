#!/usr/bin/python
# -*- encoding: utf-8 -*-

#Importar libreria GPIO
import RPi.GPIO as GPIO
#Definir modo de trabajo para la placa BCM 
GPIO.setmode(GPIO.BCM)
#Desactivo Errores
GPIO.setwarnings(False)
#Importamos la libreria time
import time
#Importamos la libreria para comandos de la consola/shell
import os
#Importamos librería para número aleatorios
import random

#Creamos variable para pausar
sleep = time.sleep
#Creamos variable con número aleatorio entre 2 y 11
aleatorio1 = random.randint(2, 11)
aleatorio2 = random.randint(2, 11)
aleatorio3 = random.randint(2, 11)

#Creamos array para usar sus valores de forma aleatoria
#aleatorio=array((2,3,4,5,6,7,8,9,10,11,12))

#Definir GPIO como Salida
GPIO.setup(2, GPIO.OUT)
GPIO.setup(3, GPIO.OUT)
GPIO.setup(4, GPIO.OUT)
GPIO.setup(5, GPIO.OUT)
GPIO.setup(6, GPIO.OUT)
GPIO.setup(7, GPIO.OUT)
GPIO.setup(8, GPIO.OUT)
GPIO.setup(9, GPIO.OUT)
GPIO.setup(10, GPIO.OUT)
GPIO.setup(11, GPIO.OUT)
GPIO.setup(12, GPIO.OUT)
GPIO.setup(13, GPIO.OUT)
GPIO.setup(14, GPIO.OUT)
GPIO.setup(15, GPIO.OUT)
GPIO.setup(16, GPIO.OUT)
GPIO.setup(17, GPIO.OUT)
GPIO.setup(18, GPIO.OUT)
GPIO.setup(19, GPIO.OUT)
GPIO.setup(20, GPIO.OUT)
GPIO.setup(21, GPIO.OUT)
GPIO.setup(22, GPIO.OUT)

#Bucle que activa de forma desordenada las salidas, máximo 3 a la vez y 5 veces
# GPIO.setup($variabledelarray, GPIO.OUT)
i = 1
while i <= 5:
	print (GPIO.setup(aleatorio1, GPIO.OUT))
	print aleatorio1
	print aleatorio2
	print aleatorio3
	aleatorio1 = random.randint(2, 11)
	aleatorio2 = random.randint(2, 11)
	aleatorio3 = random.randint(2, 11)
	i += 1
print("Terminado")

#Limpiar GPIO
GPIO.cleanup()
