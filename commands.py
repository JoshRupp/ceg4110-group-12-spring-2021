


"""
 Class Commands is made up of two dictionaries.

 (cmd_list) dictionary is the actual functional dictionary in which the key is the name of the command. The value is a
 function call in which executes that command. This dictionary is utilized to carry out all desired behaviors for the
 Monster Hunter World Discord bot.

 (printable_cmd_list) dictionary is a dictionary simply to loop through and present the desired information to the user
 so that the user my understand the type of commands that are available and what their underlining use is.

"""


class Commands:

    def __init__(self):

        self.cmd_list = {}             # command list for which the values are the function calls
        self.printable_cmd_list = {}   # command list for showing the user what commands do what




"""
 This function assumes that the key value passed is not NULL. 
 
 Function converts the function call as its key value into a string and then returns it. So that a programmer may 
 determine what key value does what if he/she forgets. 
 
"""
def getFunctionValue(self, key):

    return str(self.cmd_list[key])

"""
 This function assumes that the key value passed is not NULL. 
 
 returns value of key to caller which is a string. This value is a brief summary of what the command does. 
 each key in this dictionary is a command for the Discord Bot.
 
"""
def getPrintableValue(self, key):

    return self.printable_cmd_list[key]

"""

The caller must supply the key, value pair in order to add a command to the list/dictionary of bot commands. 
The caller must supply two values: fist value is the function call to the functional command list. 
                                    The second value is a string for the description for the printable command list. 

This function adds a command to the list of non printable command type. Thus only call this function when you're 
adding a command in which will be used by the bot itself. 

This function implicitly will add the same command to the list/dictionary of printable commands as well. 

return value: None
"""
def addCommand(self, key, value, valuep):

    self.cmd_list[key] = value
    self.printable_cmd_list[key] = valuep

"""
 Function deletes a command from the bots repertoire. 
 
 When called this function deletes the command from both the printable command dictionary and the functional 
 command dictionary.  
 
 return value: None
"""
def removeCommand(self, key):

    del self.cmd_list[key]
    del self.printable_cmd_list[key]






"""   
This function assumes that the Parameter is a single, non nested, dictionary of strings called printable_cmd_list.

 Key of any member of the dictionary printable_cmd_list is command name of Monster Hunter World Discord Bot.

 Value of any member of the dictionary printable_cmd_list is brief description of command name for the Monster Hunter
 World Discord Bot.

 return value none. --> Prints the contents of printable dictionary to stdout. 

 Prints contents of dictionary printable_cmd_list to stdout. Helps illustrate the available commands to the Monster
 Hunter World Discord Bot.

"""
def help(self):

    str1 = "Commands:"
    str2 = "Description:"
    print(str1.ljust(20, " "), str2.rjust(20, " "))

    for key, value in self.printable_cmd_list.items():
        print(key.ljust(20, ""))













