#!/usr/bin/python
# -*- encoding: utf-8 -*-
def inicializacion():
	#Importamos Librerías
	import RPi.GPIO as GPIO #Librerías GPIO
	import time #Importamos la libreria time
	import os #Importamos la libreria para comandos de la consola/shell
	import random #crea números aleatorios
	
	#Modo de tratar con GPIO
	GPIO.setmode(GPIO.BCM) #Definimos el modo BCM
	GPIO.setwarnings(False) #Desactivo Errores

	#Variables
	tiempoensegundos = 8
	sleep = time.sleep
inicializacion()

#Función para activar todos como salida
def todosSalida():
	contador = 2 #Contador de GPIO
	while contador <= 27:
		GPIO.setup(contador, GPIO.OUT)
		contador =  contador + 1

#todosSalida()

#TodosLOW
def todosLOW():
	contador = 2 #Contador de GPIO
	while contador <= 27:
		GPIO.output(contador, GPIO.LOW)
		contador =  contador + 1

#TodosHIGH
def todosHIGH():
	contador = 2 #Contador de GPIO
	while contador <= 27:
		print "GPIO.output(",contador,", GPIO.HIGH)"
		contador =  contador + 1

def seleccionarGPIOaEncender():
	while True:
		print """
			Escribe el número de GPIO según BCM que quieras encender
					Recuerda que solo funcionan valores desde el 2 al 27

			Número elegido:
			"""
		seleccionGPIO=input("-->")
		if seleccionGPIO >= 2 & seleccionGPIO <=27:
			inicializacion()
			GPIO.setup(seleccionGPIO, GPIO.OUT)
			GPIO.output(seleccionGPIO, GPIO.HIGH)
			break
		else:
			print "Esta opción es incorrecta, selecciona un número del 2 al 27"	

def seleccionarGPIOaApagar():
	while True:
		print """
			Escribe el número de GPIO según BCM que quieras apagar
					Recuerda que solo funcionan valores desde el 2 al 27

			Número elegido:
			"""
		seleccionGPIO=input("-->")
		if seleccionGPIO >= 2 & seleccionGPIO <=27:
			inicializacion()
			GPIO.setup(seleccionGPIO, GPIO.OUT)
			GPIO.output(seleccionGPIO, GPIO.LOW)
			break
		else:
			print "Esta opción es incorrecta, selecciona un número del 2 al 27"		

def aleatorio():
	while True:
		OnOff =  random.randrange(2)
		
		if OnOff == 0:
			OnOff = GPIO.HIGH
		elif OnOff == 1:
			OnOff = GPIO.LOW
		
		GPIOaleatorio = random.randrange(1,28)
		GPIOaleatorio1 = random.randrange(1,28)
		GPIOaleatorio2 = random.randrange(1,28)
		GPIOaleatorio3 = random.randrange(1,28)
		GPIOaleatorio4 = random.randrange(1,28)
		
		GPIO.output(GPIOaleatorio, OnOff)
		GPIO.output(GPIOaleatorio1, OnOff)
		GPIO.output(GPIOaleatorio2, OnOff)
		GPIO.output(GPIOaleatorio3, OnOff)
		GPIO.output(GPIOaleatorio4, OnOff)
		
		sleep(1)


# ------------------------CONTROL DE ENTRADA PARA EL MENÚ-----------------------
while True:
	print """
Este menú controla principalmente los pines GPIO del 2 al 11 según BCM
Recuerda que la tensión de salida es de 3,3V

Elige una opción:

1 Para encender todos los LED
2 Para encender de forma aleatoria 
3 Seleccionar GPIO para activar
4 Seleccionar GPIO para apagar
5 Desactivar todos los LED
6 Salir 
"""

	opcion=input("-->")
	if opcion == 1:
		inicializacion()
		GPIO.cleanup()
		todosSalida()
		todosHIGH()

	elif opcion == 2:
		inicializacion()
		GPIO.cleanup()
		todosSalida()
		aleatorio()

	elif opcion == 3:
		inicializacion()
		GPIO.cleanup()
		seleccionarGPIOaEncender()

	elif opcion == 4:
		inicializacion()
		GPIO.cleanup()
		seleccionarGPIOaApagar()

	elif opcion == 5:
		inicializacion()
		GPIO.cleanup()
		todosSalida()
		todosLOW()

	elif opcion == 6:
		break
	else:
		print "Esta opción es incorrecta, selecciona un número del 1 al 6"
		