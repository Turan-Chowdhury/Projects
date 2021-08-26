import pyttsx3
import datetime
import speech_recognition as sr
import wikipedia
import pyaudio
import webbrowser
import os
import smtplib
import pyjokes
import subprocess
import ctypes
import winshell
import time
import wolframalpha
import json
import win32com.client as wincl
from urllib.request import urlopen

engine = pyttsx3.init('sapi5')
voices = engine.getProperty('voices')
engine.setProperty('voice', voices[0].id)

def speak(audio):
    engine.say(audio)
    engine.runAndWait()

def wishMe():
    hour = int(datetime.datetime.now().hour)
    if 0 <= hour < 12:
        speak("Good morning")
    elif 12 <= hour < 18:
        speak("Good afternoon")
    else:
        speak("Good evening")
    speak("I am your personal assistant sir. please tell me how may i help you")

def takeCommand():
    r = sr.Recognizer()

    with sr.Microphone() as source:
        print("Listening...")
        r.pause_threshold = 1
        audio = r.listen(source)

    try:
        print("Recognising...\n")
        query = r.recognize_google(audio, language='en-in')
        print(f"You said : {query}\n")

    except Exception as e:
        print("say that again please....")
        print("say that again please....\n")
        return "None"

    return query

if __name__ == "__main__":
    wishMe()
    webbrowser.register('chrome', None, webbrowser.BackgroundBrowser("C:\Program Files\Google\Chrome\Application\chrome.exe"))

    while True:
        query = takeCommand().lower()

        if 'wikipedia' in query :
            speak("searching wikipedia")
            query = query.replace("wikipedia", "")
            results = wikipedia.summary(query, sentences=3)
            speak("according to wikipedia")
            print(f"{results}\n")
            speak(results)

        elif 'about you' in query :
            speak("I'm an artificial intelligence agent. an intelligent agent refers to an autonomous entity which acts, directing its activity towards achieving goals, upon an environment using observation through sensors and consequent actuators. I work as a personal agent. and i was coded by turan, zahed , sharif")
            print("I'm an artificial intelligence agent. an intelligent agent refers to an autonomous entity which acts, directing its activity towards achieving goals, upon an environment using observation through sensors and consequent actuators. I work as a personal agent. and i was coded by turan, zahedul , sharif\n")

        elif 'who are you' in query :
            speak("I am your Personal assistant. an artificial intelligence agent. . an intelligent agent refers to an autonomous entity which acts, directing its activity towards achieving goals, upon an environment using observation through sensors and consequent actuators. and i was coded by turan, zahed , sharif")
            print("I am your Personal assistant. an artificial intelligence agent. . an intelligent agent refers to an autonomous entity which acts, directing its activity towards achieving goals, upon an environment using observation through sensors and consequent actuators. and i was coded by turan, zahedul , sharif\n")

        elif 'open chrome' in query:
            speak("Here you go to Chrome\n")
            codePath = "C:\Program Files\Google\Chrome\Application\chrome.exe"
            os.startfile(codePath)

        elif 'open youtube music' in query:
            speak("Here you go to Youtube Music\n")
            webbrowser.get('chrome').open_new_tab('music.youtube.com')

        elif 'open youtube' in query :
            speak("here you go to youtube")
            webbrowser.get('chrome').open_new_tab('youtube.com')

        elif 'open google' in query :
            speak("here you go to google")
            webbrowser.get('chrome').open_new_tab('google.com')

        elif 'open amazon' in query :
            speak("here you go to amazon")
            webbrowser.get('chrome').open_new_tab('amazom.in')

        elif 'open flipkart' in query :
            speak("here you go to flipkart")
            webbrowser.get('chrome').open_new_tab('flipkart.com')

        elif 'open facebook' in query :
            speak("opening facebook")
            webbrowser.get('chrome').open_new_tab('facebook.com')

        elif 'open google classroom' in query :
            speak("opening google classroom")
            webbrowser.get('chrome').open_new_tab('classroom.google.com')

        elif 'open google drive' in query :
            speak("opening google drive")
            webbrowser.get('chrome').open_new_tab('drive.google.com')

        elif 'search' in query:
            if 'search' in query :
                speak('searching')
            else :
                speak('playing')
            query = query.replace("search", "")

            webbrowser.get('chrome').open_new_tab("https://www.google.com.tr/search?q={}".format(query))

        elif 'open gmail' in query :
            speak("opening gmail")
            webbrowser.get('chrome').open_new_tab('gmail.com')

        elif 'play music' in query :
            speak("playing music")
            music_dir = "F:\Music\Audio"
            songs = os.listdir(music_dir)
            print(f"{songs}\n")
            os.startfile(os.path.join(music_dir, songs[0]))

        elif 'open notepad' in query :
            speak("here you go to notepad")
            os.startfile("C:\windows\system32\notepad.exe")

        elif 'open adobe reader' in query :
            speak("here you go to adobe reader")
            os.startfile("C:\Program Files (x86)\Adobe\Acrobat Reader DC\Reader\AcroRd32.exe")
        
        elif 'send mail to friend' in query:
            try :
                speak("what should i say?")
                content = takeCommand()
                to = "c173064@ugrad.iiuc.ac.bd"

                server = smtplib.SMTP('smtp.gmail.com', 587)
                server.ehlo()
                server.starttls()
                server.login('turanchowdhury01@gmai.com', 'password')
                server.sendmail("turanchowdhury01@gmail.com", to, content)
                server.close()
                speak('email has been sent')

            except Exception as e :
                print(e)
                speak('sorry sir. i am not able to send this email')

        elif 'joke' in query :
            speak(pyjokes.get_joke())

        elif 'how are you' in query :
            speak('i am fine. thank you')
            print('i am fine. thank you\n')
            speak('how are you sir')

        elif 'good' in query or 'fine' in query :
            speak('its good to know that you are fine')
            print('its good to know that you are fine\n')

        elif 'who created you' in query or 'who made you' in query:
            speak('i have been created by, turan, zahedul, sharif')
            print('i have been created by, turan, zahedul, sharif\n')

        elif 'who am i' in query or 'who i am' in query :
            print("if you talk, then definately your human\n")
            speak("if you talk, then definately your human")

        elif 'what is love' in query or "what's love" in query :
            print("It is 7th sense that destroy all other senses\n")
            speak("It is 7th sense that destroy all other senses")

        elif "why you came to world" in query:
            print("It's a secret\n")
            speak("It's a secret")

        elif "good morning" in query:
            speak("A warm" + query)
            speak("How are you Sir")

        elif "afternoon" in query:
            speak(query + "Sir")
            speak("How are you Sir")

        elif "evening" in query:
            speak(query + "Sir")
            speak("How are you Sir")

        elif "night" in query:
            speak(query + "Sir")
            speak("Have a good sleep")

        elif "i love you" in query:
            speak("It's hard to understand")

        elif "what's you doing" in query or "what are you doing" in query :
            speak("Being with you, if you want me around")

        elif "bore" in query or "feeling bored" in query:
            speak("Alright, I can tell you a joke then")

        elif 'lock windows' in query :
            speak('locking windows')
            cmd = 'rundll32.exe user32.dll, LockWorkStation'
            subprocess.call(cmd)

        elif 'hibernate windows' in query :
            speak('hibernating windows')
            subprocess.call('shutdown / h')

        elif 'restart' in query :
            subprocess.call(["shutdown", "/r"])

        elif 'write a note' in query :
            speak("what should i write, sir")
            note = takeCommand()
            speak("sir, should i include date and time")
            ans = takeCommand()
            file = open("data.txt", "w")
            if 'yes' in ans or 'sure' in ans :
                time = datetime.datetime.now().strftime("%H:%M:%S")
                file.write(time)
                file.write(" :- ")
                file.write(note)

            else :
                file.write(note)

            file.close()
            speak('note written')

        elif 'show me my notes' in query or 'show note' in query or 'show notes' in query :
            speak('showing your notes')
            file = open("data.txt", "r")
            text = file.read()
            print(text)
            print("")
            speak(text)

        elif 'news' in query:
            try:
                jsonObj = urlopen('''http://newsapi.org/v2/everything?domains=wsj.com&apiKey=83d3a7ff48f54250805df0302fb6eecf''')
                data = json.load(jsonObj)
                i = 1
                speak('here are some top news')
                for item in data['articles']:
                    print(str(i) + '. ' + item['title'] + '\n')
                    print(item['description'] + '\n')
                    speak(str(i) + '. ' + item['title'] + '\n')
                    i += 1
            except Exception as e:
                print(str(e))

        elif 'the time' in query or 'time' in query :
            time = datetime.datetime.now().strftime("%H:%M:%S")
            print(time)
            print("")
            speak(f"Sir, the time is {time}")

        elif "don't listen" in query or 'stop listening' in query :
            speak('for how much time you want to stop me from listening commands')
            a = int(takeCommand())
            time.sleep(a)
            print(a)


