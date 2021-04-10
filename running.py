# Reference: https://replit.com/talk/learn/my-bot-goes-down-every-minute-and-doesn/11008/150912
from flask import Flask
from threading import Thread

app = Flask('')
@app.route('/')
def main():
    return "Your bot is alive"

def run():
    app.run(host="0.0.0.0", port=8080)

def keep_bot_alive():
    server = Thread(target=run)
    server.start()