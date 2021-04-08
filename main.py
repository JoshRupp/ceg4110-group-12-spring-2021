# Reference: https://realpython.com/how-to-make-a-discord-bot-python/
import discord
from discord.ext import commands, tasks

TOKEN = 'ODIyMTU0NzA3NzAyNjQ0NzU4.YFOJPQ.5m4-s1pxXMyce7lmPdYNbcLVqHw'
client = discord.Client()

# When the bot is ready for use
@client.event
async def on_ready():
  print(f'{client.user} has connected to Discord?')

# When a message is received
@client.event
async def on_message(message):
  if message.content == '-reply':
    response = 'Hello World'
    await message.channel.send(response)

client.run(TOKEN)
