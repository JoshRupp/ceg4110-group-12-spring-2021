# Reference: https://realpython.com/how-to-make-a-discord-bot-python/
import discord
import command
import running
from replit import db

TOKEN = db["BOT_KEY"]
client = discord.Client()


# When the bot is ready for use
@client.event
async def on_ready():
    print(f'{client.user} has connected to Discord?')


initialCmd = {
    '-overview': (0, command.overview),
    '-monster': (1, command.monster),
    '-weapon': (1, command.weapon),
    '-material': (1, command.material),
    '-save': (3, command.save),
    '-vendors': (0, command.vendor),
    '-products': (1, command.products),
    '-events': (0, command.events),
    '-location': (2, command.location),
    '-hunter tools': (0, command.huntersTools),
    '-tip': (0, command.tip),
    '-guiding': (2, command.guiding),
    '-item': (3, command.item),
    '-defeatedMonster': (1, command.defeatedMonster),
    '-whoKilledMe': (1, command.whoKilledMe),
    '-armor': (1, command.armor),
    '-skill': (1, command.skill)
}


# When a message is received
@client.event
async def on_message(message):
    response = None

    if message.content.split()[0] in initialCmd:
        cmd = message.content.split()[0]
        if initialCmd[cmd][0] == 0:
            response = initialCmd[cmd][1]()
        elif initialCmd[cmd][0] == 1:
            param = message.content.split()[1]
            response = initialCmd[cmd][1](param)
        elif initialCmd[cmd][0] == 2:
            param1 = message.content.split()[1]
            param2 = message.content.split()[2]
            response = initialCmd[cmd][1](param1, param2)
        elif initialCmd[cmd][0] == 3:
            param1 = message.content.split()[1]
            param2 = message.content.split()[2]
            param3 = message.content.split()[3]
            response = initialCmd[cmd][1](param1, param2, param3)

    if response != None:
        await message.channel.send(response)


running.keep_bot_alive()
client.run(TOKEN)
