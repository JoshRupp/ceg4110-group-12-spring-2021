# Reference: https://realpython.com/how-to-make-a-discord-bot-python/
import discord
import command
import running
from replit import db

TOKEN = db["bot-token"]
client = discord.Client()


# When the bot is ready for use
@client.event
async def on_ready():
    print(f'{client.user} has connected to Discord?')


initialCmd = {
    '-overview': (0, command.overview),
    '-monster': (1, command.monster, command.helpMonster),
    '-weapon': (1, command.weapon, command.helpWeapon),
    '-material': (1, command.material, command.helpMaterial),
    '-save': (3, command.save, command.helpSave),
    '-vendors': (0, command.vendor),
    '-products': (1, command.products, command.helpProducts),
    '-events': (0, command.events),
    '-location': (2, command.location, command.helpLocation),
    '-hunter tools': (0, command.huntersTools),
    '-tip': (0, command.tip),
    '-guiding': (2, command.guiding, command.helpGuiding),
    '-item': (3, command.item, command.helpItem),
    '-defeatedMonster': (1, command.defeatedMonster, command.helpDefeatedMonster),
    '-whoKilledMe': (1, command.whoKilledMe, command.helpWhoKilledMe),
    '-armor': (1, command.armor, command.helpArmor),
    '-skill': (1, command.skill, command.helpSave)
}


# When a message is received
@client.event
async def on_message(message):
    response = None

    if message.content.split()[0] in initialCmd:
        cmd = message.content.split()[0]
        if initialCmd[cmd][0] == 0:
            response = initialCmd[cmd][1]()
        else:
          if message.content.split()[0] == message.content:
            response = initialCmd[cmd][2]()
          else:
            param = message.content.split(" ", 1)[1]
            response = initialCmd[cmd][1](param)


    if response != None:
        await message.channel.send(response)


running.keep_bot_alive()
client.run(TOKEN)
