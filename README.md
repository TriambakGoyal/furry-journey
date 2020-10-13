<h2>Setup Project</h1>
<br>
1) clone the project----><b>git clone "Project Url"</b><br>
2) run command---><>br>
a)<b>composer install</b><br>
b)<b>npm install</b><br>
c)<b>npm run dev</b><br>

3) Create a ".ev" file in global app and copy contents of ".ev.example" in it
4) Change the Database according to your need in ".ev" file , I used sqlite data base so I rmoved all the field starting with 'DB' in ".ev" file and input only <i>DB_CONNECTION=sqlite
5) run command ---> php artisan migrate
6) to run server put command ----> php artisan serve

