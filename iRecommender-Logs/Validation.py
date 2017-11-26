#!c:/Python27/python.exe
SuggestPath = './Received/'
OrderedPath = './Ordered/'
WritePath = './Validated/'
import os
for filename in os.listdir(os.getcwd()):
    for filename in os.listdir(SuggestPath):
        OrderedPath = OrderedPath + filename
        WritePath = WritePath + filename
        with open(SuggestPath, 'r') as file1:
            with open(OrderedPath, 'r') as file2:
                same = set(file1).difference(file2)

        same.discard('\n')

        with open(WritePath, 'w') as file_out:
            for line in same:
                file_out.write(line)
