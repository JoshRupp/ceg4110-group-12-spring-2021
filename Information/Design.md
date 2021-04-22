
######CEG 4110 Spring 2021 


######Joshua Rupp, Kyle Sturdevant, Trenton Brown --> Group 12


#Frontend

**REQ: 010**

- Command: `-overview`
- Return: A paragraph explaining the game Monster Hunter World

**REQ: 020**

- Command: `-monsters <id>|<name> (page)` 
  - The required field will be either a number (id) or a string (name).
  - There is then an optional field that provides a page number if previous results went past current page limit.
- Return: 
    - If no input is provided then display instructions on how to use the command
    - If none returned then say no monster found
    - If returns one monster it will list:
        - Name
        - Type
        - Species
        - Description
        - Aliments (if exist)
        - Locations
        - Resistances (if exist)
        - Weaknesses (if exits)
        - Rewards
    - If returns more than one monster it will list in a table:
        - ID
        - Name
        - Type
        - Description

**REQ: 030**

- Command: `-weapons <id>|<name> (page)`
    - The required field will be either a number (id) or a string (name).
    - There is then an optional field that provides a page number if previous results went past current page limit.
- Return:
    - If no input is provided then display instructions on how to use the command
    - If none returned then say no monster found
    - If returns one weapon it will list:
        - Name
        - Type
        - Attack
        - Attributes
        - Damage Type
        - Durability
        - Elements
        - Crafting
        - Elderseal
    - If returns more than one weapon it will list in a table:
        - ID
        - Name
        - Type
        - Attack
    
**REQ: 040**
- Command: `-material <id>|<name> (page)`
    - The required field will be either a number (id) or a string (name).
    - There is then an optional field that provides a page number if previous results went past current page limit.
- Return:
    - If no input is provided then display instructions on how to use the command
    - If none returned then say no material found
    - If returns one material it will list:
        - Name
        - Type
        - Description
        - Usages
        - Crafting
        - Locations
    - If returns more than one material it will list in a table:
        - ID
        - Name
        - Description

**REQ: 050**
- Command: `-kit {<weapon>, <armor>, <decorations>}`
    - The required field will be some combination of a weapon, armor, and decorations
- Return:
    - If no input is provided then it will display the current user's kit.
        - If the current user does not have a kit, it will display how to use the command
    - If any input is provided, it will save this data for the specific user
        - Output message saying kit was saved.

**REQ: 060**
- Command: `-vendors (page)`
    - There is then an optional field that provides a page number if previous results went past current page limit.
- Return:
    - If no input is provided then display the first 5 vendors information:
        - Id
        - Name
        - Location
    - If a page number is specified, it will lists the 5 vendors for that page
        - If the page number mulitiplied by 5 is greater then the number of vendors, display page error
   
**REQ: 070**
- Command: `-soldby <id>|<name> (page)`
    - The required field will be either a number (id) or a string (name).
    - There is then an optional field that provides a page number if previous results went past current page limit.
- Return:
    - If no input is provided then display instructions on how to use the command
    - If none returned then say no products found
    - If returns one product it will list:
        - Name
        - Type
        - Description
    - If returns more than one product it will list in a table:
        - ID
        - Name
        - Type
        - Description

------------------------------------------------------------------------------------------


######REQ 130 Design: 


Command name: _-item make_

Parameters: _name_, _type_, _rarity_ 

**Design of _item make_ command**:

The name for the command, _item_ ,was a straight forward process. I needed a name that would 
non ambiguous.  In contrast, if the command name was _-i_ or _-itm_. There leaves a level of 
decoding from the users perspective, on trying to figure out the function of the command. 
Where as _-item make_ does not require a significant amount more typing. Yet leaves no ambiguity
as to the function of the command. Moreover, the second word in the command, _make_, 
is easier to spell for people than say _craft_ or _recipe_. 

The parameters of the _item make_ command are a way to provide a convenient way to search for a 
item recipe. The user need not know exactly what he/she wishes to search for. However,
this command does require that the user needs to know exactly one of the three ways of 
quantifying an item in the Monster Hunter World game. Providing no parameters, returns 
nothing, except a message telling the user to input a name, type, or rarity if they wish
to see a craft-able recipe for that item, if applicable. Not all items in the Monster 
Hunter World game are craft-able. Thus if the item searched for is non-craft-able then the
bot will return a message to that affect. If the user inputs two or all three parameters 
the _item make command_ shall use the first parameter given. This design provides 
flexibility and robustness from an functionality standpoint. Moreover, makes it a convenient
user friendly design so that the user does not need to be an expert in all things related
to craft-able items in Monster Hunter World. In order to find out useful information about 
items and craft-ability.  

The flexibility of the parameters was the most intellectually intensive part of this command's
design. From the users perspective, if they don't know anything about the game or very little
I wanted to be able to still have this Bot provide useful information. Thus entering one, two
or all three parameters will not only cause no functionality undefined errors. Moreover, 
will provide a flex-able input interface for the user. Thus need know only one of the three
ways to represent an item that is craft-able. 


examples of _item make_ command usage: 

`-item make Mega Potion`  -- example with _name_ parameter 

`-item make medicine`     -- example with _type_ parameter

`-item make 2`            -- example with _rarity_  parameter


example of _item make_ command return value(s):

`crafting item: Mega Potion`   -- outputs _name_ of searched item

`Items needed: Potion, Honey`  -- outputs _comma separated list_ of items needed 
 

------------------------------------------------------------------------------------------


######REQ 140 Design:


Command name: _-user_ 

Parameters: _name_, _id_, _-add_

**Design of _user_ command**:

A privilege user is define by roles in Discord. Each Discord user account has a role 
on a server that the user's account is a member of. Therefore, if the role is of type 
"privileged" then the bot will allow that user account to adjust data or edit it in the 
database of Monster Hunter World video game. 

The user command needs the name of the user or the user id associated with that user. once 
entered the Bot will prompt a message stating what type of data the user would like to add. 
Such as item, weapon, location, Armor, ect. The Bot will then prompt sequentially, all 
fields of that item type to the user. The user will input the data desired for that field. 
Once all fields have been satisfied the bot will write it to the database. Of course if 
the user inputs a wrong type for an item, (i.e. something other than a weapon, location,
item, armor) than the bot present an error message to that effect. The bot will only prompt 
an error message about inputing wrong or misguided data up to three times. After this 
condition the command will exit, and all data typed prior will be lost. IF the user inputs
no parameters or more than name, or id, then the command does nothing, other than print 
a message stating the context of the syntax issue that is occurring. 

The _-add_ paramter is not optional. It is requred for this command to be able to 
distinguish between the _user_ command that adds and changes Monster Hunter World database. 
From the same _user_ command that only edits Monster Hunter World data. Therefore, if the 
_-edit_ is not present then the command will not add anything. Moreover, prints an 
appropriate message to discrod, educated the user to the negligence of the commands input.

The design for the _user_ command is much bigger in terms of overall scope. Both in Design 
and implementation. Thus this feature will be held off until the second phase of development. 
If the backend is change. Thus currently speaking this is a requirement to design hiccup that
comes as an inevitable consequence form the waterfall process.  


examples of _user_ command usage:

`-user Josh`  -- example with _name_ parameter 

`-user 2`     -- example with _id_ parameter 



------------------------------------------------------------------------------------------


######REQ 150 Design:


Command name: _-user_ 

Parameters: _name_, _id_, _-edit_

**Design of _user_ command**:


This command is very similar to **REQ 140** command. Same command name and parameters. 
Moreover, very similar functionality. The only distinction is that this command does not 
add new weapons, items, locations, armor or other aspects to the Monster Hunter World 
database. It simply allows a privileged use to edit currently existing information about
an item, weapon, location, armour, or other. The program will prompt the user for to enter
the type of data they wish to edit. If the user inputs an invalid type; other than items,
weapons, locations or other, that is not apart of the game. The bot will print an 
appropriate message, and prompt for editing input again. However, if the user again, 
provides misguided input then the _user_ command exits. However, if the user inputs valid
input that references a specific type of item in the game. Then the Bot will find that
item and provide a list of all fields available to edit. This way it creates no ambiguity
on the users perspective, for what can and cannot be edited in the Monster Hunter 
World game via the Discord bot.

The _-edit_ paramter is not optional. It is requred for this command to be able to 
distinguish between the _user_ command that adds and changes Monster Hunter World database. 
From the same _user_ command that only edits Monster Hunter World data. Therefore, if the 
_-edit_ is not present then the command will not edit anything. Moreover, prints an 
appropriate message to discrod, educated the user to the negligence of the commands input. 

A privilege user is define by roles in Discord. Each Discord user account has a role 
on a server that the user's account is a member of. This is given by the Admin of the server.
Therefore, if the role is of type "privileged" then the bot will allow that user account 
to adjust data or edit it in the database of Monster Hunter World video game. 


As with **REQ 140**, **REQ 150** is considered more of a bonus feature and therefore is 
held off until the second phase of development. If the backend is change. Thus, currently 
speaking this is a requirement to design hiccup that comes as an inevitable consequence 
form the waterfall process.  



examples of _user_ command usage:

`-user Josh`  -- example with _name_ parameter 

`-user 2`     -- example with _id_ parameter 




------------------------------------------------------------------------------------------


######REQ 160 Design:


Command name: _-my victims_ 

Parameters: _name_ 

**Design of _user_ command**:

The command _my victims_ takes in the name of a monster in the monster hunter world video
game, as its only parameter. It installs it into a list of monsters, and then displays 
the list to the user via discord. If the name of the monster is not a monster in the 
Monster Hunter World game. Then the Bot prints out an appropriate message to the user. IF
the command is entered without any name, or parameter. Then command does nothing and prints
out nothing to the user via Discord. 

To ensure that each user of the Monster Hunter World Bot has its own list of monsters killed. 
This command creates and installs victimized monsters under the user's discord name. 
So that each user can track their killed monsters.

There are 48 total monsters in the Monster Hunter World video game. Thus the maximum size 
of any monster list will be 48. _Currently, as of 4/20/21, this number of monsters is correct. 
However, due to updates, or Monster Hunter World game designers wanting to add or remove 
monster content. This total number of monsters is subject to change_.The smallest size of
course would be if there were no monsters killed, thus size = 0. Being how the upper
bound of a monster list is 48. printing out to discord should not cause any significant
undefined bandwidth issues. 

Potentially I could have returned a dictionary here instead of a list, however,
you would have to utilize a value, or key field per cell in a dictionary in the python 
programming language. Since it is not needed and would only cause of more unneeded data 
to the user, and in code. It simply is complexity that is not needed. Thus a list or array 
in the python language is best for this design.  


examples of _my victims_ command usage:

`-my victims Kulu-Ya-Ku`  -- example with _name_ parameter 



------------------------------------------------------------------------------------------


######REQ 170 Design:


Command name: _-gone to soon_ 

Parameters: _name_ 

**Design of _user_ command**:


This command is the exact same design as the **REQ 160**. In every way; the only difference
is the command name is different. The design and implementation will be identical.
Therefore, refer to **REQ 160** to find out the details. 


examples of _gone to soon_ command usage:

`-gone to soon Kulu-Ya-Ku`  -- example with _name_ parameter 



######REQ 180 Design:


Command name: _-help_ 

Parameters: None

**Design of _help_ command**:

The _help_ command will list all available commands supported by the bot. Moreover will 
print a brief description of each command. It will do this by printing a dictionary to 
Discord Server. The key in the dictionary is the command name, the value shall be a brief 
description or purpose of the command.  

In total, the number of commands are 18 for this discord bot. Thus the size of this data 
structure is 18 cells in the command dictionary. 

I decided to go with a dictionary for this data structure instead of an array or list for 
one major reason; complexity. To achieve the same functionality that a dictionary in python
gives you. You would either need a nested list structure. Which is two lists. Furthermore,
you could use two parallel lists with indices matching up for command and description. 
Either way two separate but related lists would be needed. However, using a dictionary 
only one structure is needed. 


examples of _help_ command usage:

`-help`



#Backend

**REQ: 240**

- Option 1: https://github.com/MattJarman/mhw-api
    - Pro: Database in sqlite, so entire database is in repo
    - Con: API only provides 3 endpoints with very limited information
    - Summary: After installing Docker and getting this running, the limits in the REST API 
      make using this backend difficult. It doesn't support all the end points the other API 
      supports, and appears to have fewer categories of data. I would not recommend for this project.
- Option 2: https://github.com/LartTyler/MHWDB-API
    - Pro: Many endpoints with good documentation [here](https://docs.mhw-db.com/)
    - Con: MySql database which doesn't appear to be provided
    - Summary: After installing Vagrant and getting this API up, I found the README instructions impossible to complete. 
      The instructions said to run "./db-reset.sh latest", but this 'db-reset.sh' file doesn't exist in the repo. 
      So, when making calls to the API running locally, it fails with a database error as the database isn't 
      configured correctly. This could be an alternative solution, if the database was populated.
- Option 3: Use https://mhw-db.com directly
    - Pro: We don't need to run and host our own REST API
    - Pro: All the endpoints documented [here](https://docs.mhw-db.com/) are available. 
    - Con: We are unable to change the backend if needed. 
    - Summary: The documentation shows this REST API should provide all the features we require 
      and is publicly accessible. Using the already provided API and hosting, this option would require less resources 
      than if we were to run our own REST API backend. At this time, this is the suggested backend.











