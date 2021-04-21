


"""
   Discord has a max width of 80 characters until it word wraps. Therefore, 79 is the max word length
   Create dynamic column sizes by creating an array for width of each column.

   make maxWordLen =  max row size


"""
class OutputTable:


    def __init__(self, matrixTable, maxRowWidth):
        self.table = matrixTable
        self.boarder = "|"
        self.rowSym = "-"
        self.intersectionChar = "+"
        self.outputString = ""
        self.tableSize = len(self.table)
        self.headerSize = 0
        self.getHeaderSize()
        self.maxWordLen = int(maxRowWidth / self.headerSize)
        self.maxRowWidth = maxRowWidth
        self.columnWidth = []





    def getHeaderSize(self):

        if self.tableSize > 0:
            self.headerSize = len(self.table[0])


    """
    Accessor function for the maximum word length variable 
    """
    def getMaxWordLength(self):

        return self.maxWordLen

    """
    Mutator function maximum word length  variable 
    """
    def setMaxWordLength(self, newLen):

        self.maxWordLen = newLen

    """
     Accessor function for the boarder character variable
    """
    def getBoarderChar(self):

        return str(self.boarder)

    """
    Mutator function for the boarder character variable 
    """
    def setBoarderChar(self, newChar):

        self.boarder = str(newChar)

    def makeString(self, appendString):

        self.outputString += appendString

    """
     Function is designed to multiply the member variable self.boarder to a specified number 
     This function helps create the character designed boarder
    """
    def mulWordWithrowChar(self, num):

        return str(self.rowSym * num)

    """
    Function calculates the distance for where the last self.boarder  needs to be placed when printing a row. 
    """
    def finalSymError (self):

        return self.maxWordLen - 18

    """
    Function calculates the number of self.boarder chars needed to align perfectly, when printing a solid lin 
    of all self.boarder chars. This is useful when the self.maxWordLen changes and the table boarders need to be 
    resized. 
    """
    def resizing (self):

        return self.maxWordLen * 5 - 3

    """
     Function obtains the longest world length in a matrix table 
     Function could be used to make a more dynamic, organic word length and set it to 
     the class member world bound self.maxWordLen 
    """
    def getGreatestWordLength (self):

        length = 0

        for i in range(1, len(self.table)):
            for j in range(len(self.table[i])):
                if length < len(str(self.table[i][j])):
                    length = len(str(self.table[i][j]))

        return length


    """
    Function is designed to take in an integer in the n parameter. Find the longest length of any string a matrix 
    array and add n to it. Then set this value to the class member self.maxWordLen.  In so doing, you can organically 
    create a column width to fit the needs of any table that is of a matrix 2D array type of data structure. 
    """
    def organicCOLCalculation(self, n):

        self.maxWordLen = self.getGreatestWordLength() + n


    """
    Function truncates a world if necessary or appends space characters if necessary to create a 
    dynamic right justified look when the table is printed and its contents are presented. 
    """
    def computeWordLength(self, text):

        if len(str(text)) > self.maxWordLen:
            text =  text[:self.maxWordLen]
        elif len(str(text)) < self.maxWordLen:
            text = (text + " " * self.maxWordLen)[:self.maxWordLen]
        return text

    def computeColumnWidth(self):

        n = self.tableSize
        if not n:
            return
        elif n > 3:
            n = 4

        l = []
        for i in self.table[1:n]:
            l.append(len(str(i)))








    """
    Function prints the header of a matrix table.
    The header contents are in the first index of the matrix array. 
    """
    def printHeader(self):
        er = self.finalSymError()
        n = self.resizing()
        print(self.mulWordWithrowChar(n))
        print("" + self.boarder, end=" ")
        for i in range(len(self.table[0])):
            if i == len(self.table[0])-1:
                print(self.computeWordLength(str(self.table[0][i])), end = (" " * er) + self.boarder)
            else:
                print(self.computeWordLength(str(self.table[0][i])), end = "  " + self.boarder + " ")
        print()
        print(self.mulWordWithrowChar(n))

    """
    Function prints the rows and formats them accordingly in the matrix array. 
    """
    def printRows(self):
        er = self.finalSymError()
        n = self.resizing()
        for i in range(1, len(self.table)):
            print(self.boarder + " ", end="")
            for j in range(len(self.table[i])):
                if j == len(self.table[i]) - 1:
                    print(self.computeWordLength(str(self.table[i][j])), end = (" " * er) + self.boarder)
                else:
                    print(self.computeWordLength(str(self.table[i][j])), end = "  " + self.boarder + " ")
            print()
        print(self.mulWordWithrowChar(n))

    """
     Function to call when you want to print the whole table out of a matrix style table
    """
    def printTable(self):

        self.printHeader()
        self.printRows()

    def createStringOfTable(self):
        space = " "
        newLine = "\n"
        self.getHeaderSize()
        er = self.finalSymError()
        n = self.resizing()
        self.makeString(self.mulWordWithrowChar(n) + newLine + self.boarder + space)
        for i in range(self.headerSize):
            if i == len(self.table[0])-1:
                self.makeString(self.computeWordLength(str(self.table[0][i])) + (space * er) + self.boarder)
            else:
                self.makeString(self.computeWordLength(str(self.table[0][i])) + 2 * space + self.boarder + space)

        self.makeString(newLine + self.mulWordWithrowChar(n) + newLine)

        for i in range(1, self.tableSize):
            self.makeString(self.boarder + space)
            for j in range(len(self.table[i])):
                if j == len(self.table[i])-1:
                    self.makeString(self.computeWordLength(str(self.table[i][j])) + (space * er) + self.boarder)
                else:
                    self.makeString(self.computeWordLength(str(self.table[i][j])) + 2 * space + self.boarder + space)
            self.makeString(newLine)
        self.makeString(self.mulWordWithrowChar(n))













# table = [["Name", "Email", "Location", "Occupation"],
#          ["Rupp, Josh", "JMan@yahoo.com", "Atlanta", "Police Officer"],
#          ["Buck, Eric", "erick.buck@wright.edu", "Dayton", "Professor"],
#          ["Smith, James", "james.smithk@wright.edu", "Clemson", "Stripper"],
# ]
#
# myTable = OutputTable(table, 80)
#
# myTable.createStringOfTable()
#
# print(myTable.outputString)







