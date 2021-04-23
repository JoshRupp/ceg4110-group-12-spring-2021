


from prettytable import PrettyTable

_t = PrettyTable()

class MyTable:

    def __init__ (self, matrixTable):

        self.matrixTable = matrixTable
        self.TableLength = len(self.matrixTable)
        self.dataRowLength = 0
        self._put_header()
        self._put_rows()
        self._get_data_row_length()



    def is_table_empty(self):

        return self.TableLength == 0


    def clear_My_table(self):

        _t.clear_rows()


    def delete_a_row(self, i):

        i = int(i)
        i -= 1
        if i >= 1 and i <= self.dataRowLength-1 :
            _t.del_row(i)


    def output_table(self):

        if not self.is_table_empty():
            print(_t)

########################################################################################################################
########################################################################################################################
############################# Private functions to class: MyTable    Please No Touch ###################################
########################################################################################################################
########################################################################################################################

    def _get_data_row_length(self):

        if not self.is_table_empty():
            self.dataRowLength = len(self.matrixTable[1:])


    def _put_header(self):

        if not self.is_table_empty():
            _t.field_names = self.matrixTable[0]


    def _put_rows(self):

        if not self.is_table_empty():
         [_t.add_row(i) for i in self.matrixTable[1:]]





































tab = []

table = [["Name", "Email", "Location", "Occupation"],
         ["Rupp, Josh", "JMan@yahoo.com", "Atlanta", "Police Officer"],
        ["Buck, Eric", "erick.buck@wright.edu", "Dayton", "Professor"],
        ["Smith, James", "james.smithk@wright.edu", "Clemson", "Stripper"],
]

my_Table = MyTable(tab)


my_Table.output_table()
my_Table.delete_a_row(2.67)
my_Table.output_table()

my_Table.clear_My_table()
my_Table.output_table()














