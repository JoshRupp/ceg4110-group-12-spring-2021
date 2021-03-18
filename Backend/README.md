# Monster Hunter: World API

## Description
This API provides all information relating to [Monster Hunter: World](http://www.monsterhunterworld.com/us/), including:

* Monsters
    * Ailments
    * Weaknesses
    * Locations
* Weapons
    * Crafting Materials
    * Augmentation Materials
    * Damage Values
 * Items
    * Locations
    * Crafting materials
    
This API uses data and images provided by [MHWorldData](https://github.com/gatheringhallstudios/MHWorldData). 

## Installation

### Prerequisites
To run this project, you'll need [Git](https://git-scm.com/downloads), [Docker](https://docs.docker.com/install/), and [Docker Compose](https://docs.docker.com/compose/install/).

### Linux

#### Clone

    $ git clone https://github.com/MattJarman/mhw-api.git
    $ cd mhw-api
    
#### Setup
> Copy the env example to a new env file

    $ cp .env.example .env
    
> Run the install script (this may take a few minutes)

    $ ./install.sh

> Run the project <br>
> **Note:** *If you want to stop the project, you can run `./stop.sh`*

    $ ./start.sh
    
> You should now be able to hit any endpoints using `http://localhost:8989/{endpoint}/{parameter}`
