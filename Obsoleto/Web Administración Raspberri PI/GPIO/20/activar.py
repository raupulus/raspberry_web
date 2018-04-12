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

#Definir GPIO como Salida
GPIO.setup(20, GPIO.OUT)

#Asigno valor alto para que tenga corriente la salida de 3,3v por GPIO
GPIO.output(20, GPIO.HIGH)
