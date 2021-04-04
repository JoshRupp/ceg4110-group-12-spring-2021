
#Frontend

**010 The bot shall be able to provide an informational overview of the game**

- Command: `-overview`
- Return: A paragraph explaining the game Monster Hunter World

**020 The bot shall be able to display information about the monster specified by the user input**

- Command: `-monster <id>|<name> (page)` 
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

**030 The bot shall be able to display information for the weapon specified by the user input**

- Command: `-weapon <id>|<name> (page)`
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
    
**040 The bot shall be able to display information about the material specified by the user input**

**050 The bot shall be able to take and save user input for combinations of weapon, armor, and decorations**

**060 The bot shall be able to provide a list of vendors and where to find them**

**070 The bot shall be able to provide a list of products the vendor sells**

**Requirement 080: Upon user input, the bot shall be able to display the currently active events**  
  Command: `-events`  
  Return: A list of active events.  
  
**Requirement 090: The bot shall be able to display what monsters appear and at what difficulty within the ecosystem specified by the user**  
  Command: `-location [ecosystem][rank]`  
  Return: The monster availabale in the ecosystem at the rank specified by the user.  
  
**Requirement 100: The bot shall be able to provide information about permanently equipped tools**  
  Command: `-hunter tools`  
	Return: Small description of each fixed hunter tool (i.e. scout flies, clutch claw, etc)  

**Requirement 110: The bot shall be able to provide a random tip or advice when prompted by the user**  
	Command: `-tip`  
	Return: A random tip about gameplay (i.e. environment use, hunting strategy, etc.)  

**Requirement 120: The bot shall be able to display which monsters are available at which level in the area of the guiding lands specified by the user**  
	Command: `-Guiding [area] [level]`  
	Return: Monsters that spawn in “area” at “level”  

#Backend

**240 The Backend shall be a REST API providing information related to the Monster Hunter World game.**

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
