
import pTables as pt


emptyTable = []

table1 = [["Name", "Email", "Location", "Occupation"],
        ["Rupp, Josh", "JMan@yahoo.com", "Atlanta", "Police Officer"],
        ["Buck, Eric", "erick.buck@wright.edu", "Dayton", "Professor"],
      ["Smith, James", "james.smithk@wright.edu", "Clemson", "Stripper"],
]

table2 = []
table3 = []

epyt = pt.ASCiiTable(emptyTable, 69)
t1 = pt.ASCiiTable(table1, 65)
t2 = pt.ASCiiTable(table2, 50)
t3 = pt.ASCiiTable(table1, 80)


def test_is_table_empty():

    assert(t1.is_table_empty())


def test_clear_my_table():
    pass


def test_delete_a_row():
    pass


def test_get_data_row_length():
    pass


def test_get_max_column_lengths():
    pass


def test_is_bigger_than_max_width():
    pass













