#!c:/Python27/python.exe
ReadPath = './'
WritePath = './Analyzed/'
import os
for filename in os.listdir(os.getcwd()):
    for filename in os.listdir(ReadPath):
        writeFilePath = WritePath + filename
        print writeFilePath
        ReadFile = open(filename, 'r') 
        for line in ReadFile:
            broken = line.split('/')
            if broken[-2] == 'product':
                WriteFile = open(writeFilePath,'a')
                WriteFile.write(broken[-1])
