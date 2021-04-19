import requests

api_url = "https://mhw-db.com/"


def get_all(str_type):
    """
    Used to get all objects of a type
    Ex. https://mhw-db.com/monsters would return all monsters
    """
    request_url = api_url + str_type
    results = requests.get(request_url)
    if results is not None:
        return results.json()
    else:
        return None


def get_id(str_type, str_id):
    """
    Used to get one object of a type with specific id
    Ex. https://mhw-db.com/monsters/1 would return the monster with id 1
    """
    request_url = api_url + str_type + "/" + str_id
    results = requests.get(request_url)
    if results is not None:
        return results.json()
    else:
        return None


def get_name(str_type, str_name):
    """
    Used to get any object of a type who's name matches part of the string
    Ex. get_name("monsters", "ja"), would return all monsters with 'ja' anywhere in their name
    (i.e. "Jagras" and "Anjanath")
    """
    request_url = api_url + str_type + "?q={\"name\":{\"$like\":\"%" + str_name + "%\"}}"
    results = requests.get(request_url)
    if results is not None:
        return results.json()
    else:
        return None
