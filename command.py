def overview():
  return "The overview command was called"

def monster(name):
  if name == None:
    return "Called monster with no input"
  else:
    return "Called monster with the input: " + str(name)

def weapon(name):
  if name == None:
    return "Called weapon with no input"
  else:
    return "Called weapon with the input: " + str(name)

def material(name):
  if name == None:
    return "Called material with no input"
  else:
    return "Called material with the input: " + str(name)

def save(weapon, armor, decoration):
  if weapon == None and armor == None and decoration == None:
    return "Called save with no input"
  else:
    return "Called save with the inputs: " + str(weapon) + str(armor) + str(decoration)

def vendor():
  return "Vendor was called"

def products(vendor):
  if vendor == None:
    return "Called products with no input"
  else:
    return "Called products with the input: " + str(vendor)

def events():
  return "Events were called"

def location(ecosystem, rank):
  if vendor == None and rank == None:
    return "Called location with no input"
  else:
    return "Called location with the input: " + str(ecosystem) + str(rank)

def huntersTools():
  return "Called hunters tools"

def tip():
  return "Called tip"

def guiding(area, level):
  if area == None and level == None:
    return "Called guiding with no input"
  else:
    return "Called guiding with the input: " + str(area) + str(level)

def item(name, rarity, type):
  if name == None and rarity == None and type == None:
    return "Called item with no input"
  else:
    return "Called item with the inputs: " + str(name) + str(rarity) + str(type)

def defeatedMonster(name):
  if name == None:
    return "Called defeated monster with no input"
  else:
    return "Called defeated monster with the input: " + str(name)

def whoKilledMe(name):
  if name == None:
    return "Called who killed me with no input"
  else:
    return "Called who killed me with the input: " + str(name)

def armor(name):
  if name == None:
    return "Called armor with no input"
  else:
    return "Called armor with the input: " + str(name)

def skill(name):
  if name == None:
    return "Called skill with no input"
  else:
    return "Called skill with the input: " + str(name)
