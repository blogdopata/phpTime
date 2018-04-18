# Comandos GIT :3

## Alias 

1. git config --global  -l    ---> ver una list de todas las config globales
2. git config --global  alias."nombreAsignado"  "codigo a reemplazar x el asignado"
3. Ej: git config --global alias.s "status -s -b" --> git s  ( mostrará el status en modo silent y la branch)
4. git config --global user.name  "nombre :3"
5. git config --global user.email  "nickname@domain.sex"

6. $ git config --global alias.superlog
"log --graph --abbrev-commit --decorate --date=relative --format=format:'%C(bold blue)%h%C(reset) - %C(bold green)(%ar)%C(reset) %C(white)%s%C(reset) %C(dim white)- %an%C(reset)%C(bold yellow)%d%C(reset)' --all"


## Comandos extras

1. git diff --->  muestra el cambio realizado entre las sentencias ( stage area y local area)
1. git diff staged ---> muestra el cambio  que se encuentra en el stage area
2.  git commit -- . ------> regresa los cambios al ultimo commit 
3. git reset HEAD "nombre del archivo" --->  sacar un archivo de Stage area
4. git add -- . ( Agrega todo al Stage)

## Comandos Commit 

1. git commit -am "Save directo" --> va del local al repo directo" 
2. git commit --amend -m "Actualizamos el README" --> renombrar el ultimo commit 
3. git reset --soft HEAD^  ---> Regresa a un estado antes del ultimo commit para modificar algo y reemplazar ese commit
4. Cuando se ejecuta lo sgte : git commit ( " sin mensaje ") muesta otra pantalla donde se hará :
* Apretar "A" para escribir el nombre del commit
* Se presionara "ESC"  y luego  ":"  "W" (write) y "Q" (quit)
