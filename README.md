# FinalProjectWF3CarRenting

Final project for the validation of the professional title Bac +2 web developer and web-mobile full stack 

Link of the trello, to see the progress of the project during its conception 

=> &nbsp;&nbsp;https://trello.com/b/RIsb7nG7/final-project-wf3-car-renting

Link of the Figma, to see the progress of the project during the realization of the model

=>&nbsp;&nbsp;https://www.figma.com/file/tMrMFZ73NxIgU5CG6A4Eja/Untitled?node-id=0%3A1

I chose to work with docker, in order to optimize the project sharing with a version chosen by myself. I chose to use the Symfony 6.0 framework in PHP 8.0.13.

Just run the following commands (for osx, windows, linux) :

```
git clone https://github.com/mouradof/FinalProjectWF3CarRenting.git
```
 
```
docker-compose build
docker-compose up -d
```
```
docker exec -it php8-sf6 bash
```
```
cd FinalProjectWF3CarRenting
```

```
$  composer install
```

```
$  npm install
$  npm run build
```

```
$  symfony console doctrine:fixtures:load
```

```
$  symfony serve -d
```

```
$  adduser username
$  chown username:username -R
```

Your application is available at http://127.0.0.1:8000

Admin Inteface at http://127.0.0.1:8000/admin

PhpMyAdmin at ...
