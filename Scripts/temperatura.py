#!/usr/bin/python
# -*- encoding: utf-8 -*-
import commands
temp = int(open('/sys/class/thermal/thermal_zone0/temp').read()) / 1e3
print 'Temp.CPU -> ' + str(temp) + ' ºC'
tempgpu = commands.getoutput('/opt/vc/bin/vcgencmd measure_temp' ).replace('temp=', '' ).replace('\'C', '')
print 'Temp.GPU -> ' + str(tempgpu) + ' ºC'

