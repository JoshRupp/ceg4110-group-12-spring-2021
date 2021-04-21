
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
