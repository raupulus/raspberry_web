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

#Creamos variable para pausar
sleep = time.sleep

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

#Asigno valor alto para que tenga corriente la salida de 3,3v por GPIO
GPIO.output(2, GPIO.HIGH)
GPIO.output(3, GPIO.HIGH)
GPIO.output(4, GPIO.HIGH)
GPIO.output(5, GPIO.HIGH)
GPIO.output(6, GPIO.HIGH)
GPIO.output(7, GPIO.HIGH)
GPIO.output(8, GPIO.HIGH)
GPIO.output(9, GPIO.HIGH)
GPIO.output(10, GPIO.HIGH)
GPIO.output(11, GPIO.HIGH)
GPIO.output(12, GPIO.HIGH)
GPIO.output(13, GPIO.HIGH)
GPIO.output(14, GPIO.HIGH)
GPIO.output(15, GPIO.HIGH)
GPIO.output(16, GPIO.HIGH)
GPIO.output(17, GPIO.HIGH)
GPIO.output(18, GPIO.HIGH)
GPIO.output(19, GPIO.HIGH)
GPIO.output(20, GPIO.HIGH)
GPIO.output(21, GPIO.HIGH)
GPIO.output(22, GPIO.HIGH)

#Espero 4 segundos
sleep(4)

#Asigno valor bajo para apagar
GPIO.output(2, GPIO.LOW)
GPIO.output(3, GPIO.LOW)
GPIO.output(4, GPIO.LOW)
GPIO.output(5, GPIO.LOW)
GPIO.output(6, GPIO.LOW)
GPIO.output(7, GPIO.LOW)
GPIO.output(8, GPIO.LOW)
GPIO.output(9, GPIO.LOW)
GPIO.output(10, GPIO.LOW)
GPIO.output(11, GPIO.LOW)
GPIO.output(12, GPIO.LOW)
GPIO.output(13, GPIO.LOW)
GPIO.output(14, GPIO.LOW)
GPIO.output(15, GPIO.LOW)
GPIO.output(16, GPIO.LOW)
GPIO.output(17, GPIO.LOW)
GPIO.output(18, GPIO.LOW)
GPIO.output(19, GPIO.LOW)
GPIO.output(20, GPIO.LOW)
GPIO.output(21, GPIO.LOW)
GPIO.output(22, GPIO.LOW)

#Espero 2 segundos
sleep(2)

#Asigno valor alto para que tenga corriente la salida de 3,3v por GPIO
GPIO.output(2, GPIO.HIGH)
GPIO.output(3, GPIO.HIGH)
GPIO.output(4, GPIO.HIGH)
GPIO.output(5, GPIO.HIGH)
GPIO.output(6, GPIO.HIGH)
GPIO.output(7, GPIO.HIGH)
GPIO.output(8, GPIO.HIGH)
GPIO.output(9, GPIO.HIGH)
GPIO.output(10, GPIO.HIGH)
GPIO.output(11, GPIO.HIGH)
GPIO.output(12, GPIO.HIGH)
GPIO.output(13, GPIO.HIGH)
GPIO.output(14, GPIO.HIGH)
GPIO.output(15, GPIO.HIGH)
GPIO.output(16, GPIO.HIGH)
GPIO.output(17, GPIO.HIGH)
GPIO.output(18, GPIO.HIGH)
GPIO.output(19, GPIO.HIGH)
GPIO.output(20, GPIO.HIGH)
GPIO.output(21, GPIO.HIGH)
GPIO.output(22, GPIO.HIGH)

#Espero 4 segundos
sleep(4)

#Asigno valor bajo para apagar
GPIO.output(2, GPIO.LOW)
GPIO.output(3, GPIO.LOW)
GPIO.output(4, GPIO.LOW)
GPIO.output(5, GPIO.LOW)
GPIO.output(6, GPIO.LOW)
GPIO.output(7, GPIO.LOW)
GPIO.output(8, GPIO.LOW)
GPIO.output(9, GPIO.LOW)
GPIO.output(10, GPIO.LOW)
GPIO.output(11, GPIO.LOW)
GPIO.output(12, GPIO.LOW)
GPIO.output(13, GPIO.LOW)
GPIO.output(14, GPIO.LOW)
GPIO.output(15, GPIO.LOW)
GPIO.output(16, GPIO.LOW)
GPIO.output(17, GPIO.LOW)
GPIO.output(18, GPIO.LOW)
GPIO.output(19, GPIO.LOW)
GPIO.output(20, GPIO.LOW)
GPIO.output(21, GPIO.LOW)
GPIO.output(22, GPIO.LOW)
#Limpiar GPIO
GPIO.cleanup()
