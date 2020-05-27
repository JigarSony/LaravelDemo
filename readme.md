PHP
CMS and framework
CMS : Conntent Management System
wordpress, magento, zoomla 
Framework: blank structure is there 
cake, laravel.


install xampp - https://www.apachefriends.org/download.html
install compose - https://getcomposer.org/download/

check is composer installed? cmd >composer ...


then installed laravel into local
cmd> composer global require laravel/installer

> cd C:\xampp\htdocs

>laravel new HelloLaravel 

it will create projet in that dir

go to that path or open that folder in VScode

open terminal in VScode> php artisan serve
open that link in browser > laravel display


here in priject
composer is like github
package is dependency manager
.env is env details


For Routers >router>web.php

For pages > resources>views> pages name

about.blade.php

give that page name in web.php 

Route::get('/about', function () {
    return view('about');
});

for linking give syntax in pages
<a href="{{ url('about')}}"> About </a> |
<a href="{{ url('contact')}}"> Contact </a> |


For security give controller 
controller path is  >app>http>controllers

so for creating new controller 
open new terminal in vscode
cmd>php artisan make:contoller mycontroller

for showing all command
> php artisan

make one method in controller
 public function index(){
        //echo "Welcome to Index of MyController";
        return view('about');
    }

Call from the web.php
Route::get('helloworld', 'mycontroller@index');

controller is bridge between view and model


how to use template/theme
goto https://templated.co/stampalike
download
unzip
Copy images and css file and paste in the project>public folder

Copy index.html code from downloaded folert to your about page
"old about page" 
<html> 
<body>

<a href="{{ url('about')}}"> About </a> |
<a href="{{ url('contact')}}"> Contact </a> |

<h1>Welcome to About us page </h1>
</body>
</html>



for databse click on xamp > mysql >admin
http://localhost/phpmyadmin/
go to database
create database
givename laravel
migration...
bydefault in project>database>migration
2 files are there
so default files need to migrate
in .env file database mysql are ready to use


cmd>php artisan migrate
automatically in phpadmin these tables are migrated

here database named as migration

if you want to create new table
cmd>php artisan make:migration create_category_table


schema- database structure

	
	

