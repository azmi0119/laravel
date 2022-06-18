Laravel Interview Questions and Answers for Experience & Freshers
What is Laravel?
What is the latest Laravel version?
Define composer.
What is HTTP middleware?
Name aggregates methods of query builder.
What is a Route?
Why use Route?
What do you mean by bundles?
Explain important directories used in a common Laravel application.
What is a Controller?

1) What is Laravel?

	Laravel is an open-source widely used PHP framework. The platform was intended for the development of web application by using MVC architectural pattern. Laravel is released under the MIT license.

	Therefore, its source code is hosted on GitHub. It is a reliable PHP framework as it follows expressive and accurate language rules.

2) What is the latest Laravel version?

	The latest Laravel version is version 8, which was released on September 8th, 2020.

3) Define composer.

	It is an application-level package manager for PHP. It provides a standard format for managing PHP software dependencies and libraries.

4) What is HTTP middleware?

	HTTP middleware is a technique for filtering HTTP requests. Laravel includes a middleware that checks whether application user is authenticated or not.

5) Name aggregates methods of query builder.

	Aggregates methods of query builder are: 1) max(), 2) min(), 3) sum(), 4) avg(), and 5) count().

Laravel Interview Questions and Answers
6) What is a Route?

	A route is basically an endpoint specified by a URI (Uniform Resource Identifier). It acts as a pointer in Laravel application.
	Most commonly, a route simply points to a method on a controller and also dictates which HTTP methods are able to hit that URI.

7) Why use Route?

	Routes are stored inside files under the /routes folder inside the project’s root directory. By default, there are a few different files corresponding to the different “sides” of the application (“sides” comes from the hexagonal architecture methodology).

8) What do you mean by bundles?

	In Laravel, bundles are referred to as packages. These packages are used to increase the functionality of Laravel. A package can have views, configuration, migrations, routes, and tasks.

9) Explain important directories used in a common Laravel application.

	Directories used in a common Laravel application are:

	App/: This is a source folder where our application code lives. All controllers, policies, and models are inside this folder.
	Config/: Holds the app’s configuration files. These are usually not modified directly but instead, rely on the values set up in the .env (environment) file at the root of the app.
	Database/: Houses the database files, including migrations, seeds, and test factories.
	Public/: Publicly accessible folder holding compiled assets and of course an index.php file.
	10) What is a Controller?

	A controller is the “C” in the “MVC” (Model-View-Controller) architecture, which is what Laravel is based on.

11) Explain reverse routing in Laravel.

	Reverse routing is a method of generating URL based on symbol or name. It makes your Laravel application flexible.

12) Explain traits in Laravel.

	Laravel traits are a group of functions that you include within another class. A trait is like an abstract class. You cannot instantiate directly, but its methods can be used in concreate class.

13) Explain the concept of contracts in Laravel.

	They are set of interfaces of Laravel framework. These contracts provide core services. Contracts defined in Laravel include corresponding implementation of framework.

14) How will you register service providers?

	You can register service providers in the config/app.php configuration file that contains an array where you can mention the service provider class name.

15) Where will you define Laravel’s Facades?

	All facades of Laravel have defined in Illuminate\Support\Facades namespace.

16) State the difference between get and post method.

	Get method allows you to send a limited amount of data in the header. Post allows you to send a large amount of data in the body.

17) List default packages of Laravel 5.6.

	Default packages of Laravel 5.6 are: 1) Envoy, 2) Passport, 3) Socialite, 4) Cashier, 5) Horizon, and 6) Scout.

18) What is service container in Laravel?

	Service container is a tool used for performing dependency injection in Laravel.

19) How can you enable query log in Laravel?

	You can use enableQueryLog method to enable query log in Laravel.

20) Explain the concept of events in Laravel.

	An event is an occurrence or action that help you to subscribe and listen for events that occur in Laravel application. Some of the events are fired automatically by Laravel when any activity occurs.

21) Explain dependency injection and their types.

	It is a technique in which one object is dependent on another object. There are three types of dependency injection: 1) Constructor injection, 2) setter injection, and 3) interface injection.

22) What are the advantages of using Laravel?

Here are important benefits of Laravel:

Laravel has blade template engine to create dynamic layouts and increase compiling tasks.
Reuse code without any hassle.
Laravel provides you to enforce constraints between multiple DBM objects by using an advanced query builder mechanism.
The framework has an auto-loading feature, so you don’t do manual maintenance and inclusion paths
The framework helps you to make new tools by using LOC container.
Laravel offers a version control system that helps with simplified management of migrations.

23) Explain validation concept in Laravel.

Validations are an important concept while designing any Laravel application. It ensures that the data is always in an expected format before it stores into the database. Laravel provides many ways to validate your data.

Base controller trait uses a ValidatesRequests class which provides a useful method to validate requests coming from the client machine.

24) What does ORM stand for?

ORM stands for Object Relational Mapping

25) How can you reduce memory usage in Laravel?

While processing a large amount of data, you can use the cursor method in order to reduce memory usage.

26) List available types of relationships in Laravel Eloquent.

Types of relationship in Laravel Eloquent are: 1) One To One 2) One To Many 3) Many To Many 4) Has Many Through, and 5) Polymorphic Relations.

27) Name the Template Engine utilized by Laravel.

Blade is a powerful template engine utilized by Laravel.

28) Name databases supported by Laravel.

Laravel supports the following databases:

	PostgreSQL
	SQL Server
	SQLite
	MySQL

29) Why are migrations important?

	Migrations are important because it allows you to share application by maintaining database consistency. Without migration, it is difficult to share any Laravel application. It also allows you to sync database.

30) Define Lumen

	Lumen is a micro-framework. It is a smaller, and faster, version of a building Laravel based services, and REST API’s.

31) Explain PHP artisan

	An artisan is a command-line tool of Laravel. It provides commands that help you to build Laravel application without any hassle.

32) How can you generate URLs?

	Laravel has helpers to generate URLs. This is helpful when you build link in your templates and API response.

33) Which class is used to handle exceptions?

	Laravel exceptions are handled by App\Exceptions\Handler class.

34) What are common HTTP error codes?

	The most common HTTP error codes are:

	Error 404 – Displays when Page is not found.
	Error- 401 – Displays when an error is not authorized

35) Explain fluent query builder in Laravel.
	It is a database query builder that provides convenient, faster interface to create and run database queries.

36) What is the use of dd() function?

	This function is used to dump contents of a variable to the browser. The full form of dd is Dump and Die.

37) List out common artisan commands used in Laravel.

	Laravel supports following artisan commands:

	PHP artisan down;
	PHP artisan up;
	PHP artisan make:controller;
	PHP artisan make:model;
	PHP artisan make:migration;
	PHP artisan make:middleware;

38) How to configure a mail-in Laravel?

	Laravel provides APIs to send an email on local and live server.

39) Explain Auth.

	It is a method of identifying user login credential with a password. In Laravel it can be managed with a session which takes two parameters 1) username and 2) password.

40) Differentiate between delete() and softDeletes().

	delete(): remove all record from the database table.
	softDeletes(): It does not remove the data from the table. It is used to flag any record as deleted.

41) How can you make real time sitemap.xml file in Laravel?

	You can create all web pages of a website to tell the search engine about the organizing site content. The crawlers of search engine read this file intelligently to crawl a website.

42) Explain faker in Laravel.

	It is a type of module or packages which are used to create fake data. This data can be used for testing purpose.

	It is can also be used to generate: 1) Numbers, 2) Addresses, 3) DateTime, 4) Payments, and 5) Lorem text.

43) How will you check table is exists or in the database?

	Use hasTable() Laravel function to check the desired table is exists in the database or not.

44) What is the significant difference between insert() and insertGetId() function in Laravel?

	Insert(): This function is simply used to insert a record into the database. It not necessary that ID should be autoincremented.
	InsertGetId(): This function also inserts a record into the table, but it is used when the ID field is auto-increment.

45) Explain active record concept in Laravel.
	In active record, class map to your database table. It helps you to deal with CRUD operation.

46) List basic concepts in Laravel?

	Following are basic concepts used in Laravel:

	Routing
	Eloquent ORM
	Middleware
	Security
	Caching
	Blade Templating

47) Define Implicit Controller.

	Implicit Controllers help you to define a proper route to handle controller action. You can define them in route.php file with Route:: controller() method.

48) How to use the custom table in Laravel Model?

	In order to use a custom table, you can override the property of the protected variable $table.

49) What is MVC framework?

	It is Model, View, and Controller:

	Model: Model defines logic to write Laravel application.
	View: It covers UI logic of Laravel application.
	Controller: It is work as an interface between Model, and View. It is a way how the user interacts with an application.

50) Define @include.

	@include is used to load more than one template view files. It helps you to include view within another view. User can also load multiple files in one view.

51) Explain the concept of cookies.

	Cookies are small file sent from a particular website and stored on PC by user’s browser while the user is browsing.

52) Which file is used to create a connection with the database?

	To create a connection with the database, you can use .env file.

53) What is Eloquent?

	Eloquent is an ORM used in Laravel. It provides simple active record implementation working with the database. Each database table has its Model, which used to interact with the table.

54) Name some Inbuilt Authentication Controllers of Laravel.

	Laravel installation has an inbuilt set of common authentication controllers. These controllers are:

	RegisterController
	LoginController
	ResetPasswordController
	ForgetPasswordController

55) Define Laravel guard.

	Laravel guard is a special component that is used to find authenticated users. The incoming requested is initially routed through this guard to validate credentials entered by users. Guards are defined in ../config/auth.php file.

56) What is Laravel API rate limit?

	It is a feature of Laravel. It provides handle throttling. Rate limiting helps Laravel developers to develop a secure application and prevent DOS attacks.

57) Explain collections in Laravel.

	Collections is a wrapper class to work with arrays. Laravel Eloquent queries use a set of the most common functions to return database result.

58) What is the use of DB facade?

	DB facade is used to run SQL queries like create, select, update, insert, and delete.

59) What is the use of Object Relational Mapping?

	Object Relational Mapping is a technique that helps developers to address, access, and manipulate objects without considering the relation between object and their data sources.

60) Explain the concept of routing in Laravel.

	It allows routing all your application requests to the controller. Laravel routing acknowledges and accepts a Uniform Resource Identifier with a closure.

61) What is Ajax in Laravel?

	Ajax stands for Asynchronous JavaScript and XML is a web development technique that is used to create asynchronous Web applications. In Laravel, response() and json() functions are used to create asynchronous web applications.

62) What is a session in Laravel?

	Session is used to pass user information from one web page to another. Laravel provides various drivers like a cookie, array, file, Memcached, and Redis to handle session data.

63) How to access session data?

	Session data be access by creating an instance of the session in HTTP request. Once you get the instance, use get() method with a “Key” as a parameter to get the session details.

64) State the difference between authentication and authorization.

	Authentication means confirming user identities through credentials, while authorization refers to gathering access to the system.

65) Explain to listeners.

	Listeners are used to handling events and exceptions. The most common listener in Laravel for login event is LoginListener.

66) What are policies classes?

	Policies classes include authorization logic of Laravel application. These classes are used for a particular model or resource.

67) How to rollback last migration?

	Use need to use artisan command to rollback the last migration.

68) What do you mean by Laravel Dusk?

	Laravel Dusk is a tool which is used for testing JavaScript enabled applications. It provides powerful, browser automation, and testing API.

69) Explain Laravel echo.

	It is a JavaScript library that makes possible to subscribe and listen to channels Laravel events. You can use NPM package manager to install echo.

70) What is make method?

	Laravel developers can use make method to bind an interface to concreate class. This method returns an instance of the class or interface. Laravel automatically inject dependencies defined in class constructor.

71) Explain Response in Laravel.

	All controllers and routes should return a response to be sent back to the web browser. Laravel provides various ways to return this response. The most basic response is returning a string from controller or route.

72) What is query scope?

	It is a feature of Laravel where we can reuse similar queries. We do not require to write the same types of queries again in the Laravel project. Once the scope is defined, just call the scope method when querying the model.

73) Explain homestead in Laravel.

	Laravel homestead is the official, disposable, and pre-packaged vagrant box that a powerful development environment without installing HHVM, a web server, and PHP on your computer.

74) What is namespace in Laravel?

	A namespace allows a user to group the functions, classes, and constants under a specific name.

75) What is Laravel Forge?

	Laravel Forge helps in organizing and designing a web application. Although the manufacturers of the Laravel framework developed this toll, it can automate the deployment of every web application that works on a PHP server.

76) State the difference between CodeIgniter and Laravel.

	Parameter	CodeIgniter	Laravel
	Support of ORM	CodeIgniter does not support Object-relational mapping.	Laravel supports ORM.
	Provide Authentication	It does provide user authentication.	It has inbuilt user authentication.
	Programming Paradigm	It is component-oriented.	It is object-oriented.
	Support of other Database Management System	It supports Microsoft SQL Server, ORACLE, MYSQL, IBM DB2, PostgreSQL, JDBC, and orientDB compatible.	It supports PostgreSQL, MySQL, MongoDB, and Microsoft BI, but CodeIgniter additionally supports other databases like Microsoft SQL Server, DB2, Oracle, etc.
	HTTPS Support	CodeIgniter partially support HTTPS. Therefore, programmers can use the URL to secure the data transmission process by creating PATS.	Laravel supports custom HTTPS routes. The programmers can create a specific URL for HTTPS route they have defined.

77) What is an Observer?

	Model Observers is a feature of Laravel. It is used to make clusters of event listeners for a model. Method names of these classes depict the Eloquent event. Observers classes methods receive the model as an argument.

78) What is the use of the bootstrap directory?

	It is used to initialize a Laravel project. This bootstrap directory contains app.php file that is responsible for bootstrapping the framework.

79) What is the default session timeout duration?

	The default Laravel session timeout duration is 2 hours.

80) How to remove a complied class file?

	Use clear-compiled command to remove the compiled class file.

81) In which folder robot.txt is placed?

	Robot.txt file is placed in Public directory.

82) Explain API.PHP route.

	Its routes correspond to an API cluster. It has API middleware which is enabled by default in Laravel. These routes do not have any state and cross-request memory or have no sessions.

83) What is named route?

	Name route is a method generating routing path. The chaining of these routes can be selected by applying the name method onto the description of route.

84) what is open source software?

	Open-source software is a software which source code is freely available. The source code can be shared and modified according to the user requirement.

85) Explain Loggin in Laravel.

	It is a technique in which system log generated errors. Loggin is helpful to increase the reliability of the system. Laravel supports various logging modes like syslog, daily, single, and error log modes.

86) What is Localization?

	It is a feature of Laravel that supports various language to be used in the application. A developer can store strings of different languages in a file, and these files are stored at resources/views folder. Developers should create a separate folder for each supported language.

87) Define hashing in Laravel.

	It is the method of converting text into a key that shows the original text. Laravel uses the Hash facade to store the password securely in a hashed manner.

88) Explain the concept of encryption and decryption in Laravel.

	It is a process of transforming any message using some algorithms in such way that the third user cannot read information. Encryption is quite helpful to protect your sensitive information from an intruder.

	Encryption is performed using a Cryptography process. The message which is to be encrypted called as a plain message. The message obtained after the encryption is referred to as cipher message. When you convert cipher text to plain text or message, this process is called as decryption.

89) How to share data with views?

	To pass data to all views in Laravel use method called share(). This method takes two arguments, key, and value.

	Generally, share() method are called from boot method of Laravel application service provider. A developer can use any service provider, AppServiceProvider, or our own service provider.

90) Explain web.php route.

	Web.php is the public-facing “browser” based route. This route is the most common and is what gets hit by the web browser. They run through the web middleware group and also contain facilities for CSRF protection (which helps defend against form-based malicious attacks and hacks) and generally contain a degree of “state” (by this I mean they utilize sessions).

91) How to generate a request in Laravel?

	Use the following artisan command in Laravel to generate request:

	php artisan make:request UploadFileRequest




//............................   ADVANCE LARAVEL QUESTION -------------------------------

Resource Link - https://www.interviewbit.com/laravel-interview-questions/

5. What is an artisan?
	Artisan is the command-line tool for Laravel to help the developer build the application. You can enter the below command to get all the available commands:

6. How to define environment variables in Laravel?
	The environment variables can be defined in the .env file in the project directory. A brand new laravel application comes with a .env.example and while installing we copy this file and rename it to .env and all the environment variables will be defined here.

	Some of the examples of environment variables are APP_ENV, DB_HOST, DB_PORT, etc. 


8. How to put Laravel applications in maintenance mode?
	Maintenance mode is used to put a maintenance page to customers and under the hood, we can do software updates, bug fixes, etc. Laravel applications can be put into maintenance mode using the below command:

		php artisan down

	And can put the application again on live using the below command:

		php artisan up

	Also, it is possible to access the website in maintenance mode by whitelisting particular IPs.


9. What are the default route files in Laravel?
	Below are the four default route files in the routes folder in Laravel:

		web.php - For registering web routes.
		api.php - For registering API routes.
		console.php - For registering closure-based console commands.
	channel.php - For registering all your event broadcasting channels that your application supports.


11. What are seeders in Laravel?
	Seeders in Laravel are used to put data in the database tables automatically. After running migrations to create the tables, we can run `php artisan db:seed` to run the seeder to populate the database tables.

	We can create a new Seeder using the below artisan command:

	php artisan make:seeder [className]


12. What are factories in Laravel?
	Factories are a way to put values in fields of a particular model automatically. Like, for testing when we add multiple fake records in the database, we can use factories to generate a class for each model and put data in fields accordingly. Every new laravel application comes with database/factories/UserFactory.php which looks like below:


13. How to implement soft delete in Laravel?
	Soft Delete means when any data row is deleted by any means in the database, we are not deleting the data but adding a timestamp of deletion.

Q16: What is Closure in Laravel?

Answer
	A Closure is an anonymous function. Closures are often used as callback methods and can be used as a parameter in a function.

	Example 
		function handle(Closure $closure) {
		    $closure('Hello World!');
		}

		handle(function($value){
		    echo $value;
		});


Q17: What is autoloading classes in PHP?
Answer
	With autoloaders, PHP allows the last chance to load the class or interface before it fails with an error.

	The spl_autoload_register() function in PHP can register any number of autoloaders, enable classes and interfaces to autoload even if they are undefined.

	Example 
		spl_autoload_register(function ($classname) {
		    include  $classname . '.php';
		});
		$object  = new Class1();
		$object2 = new Class2(); 


Q23: What does a $$$ mean in PHP? 



4. What is Laravel Elixir ?
Laravel Elixir provides a clean, fluent API for defining basic Gulp tasks for your Laravel application. Elixir supports common CSS and JavaScript preprocessors like Sass and Webpack. Using method chaining, Elixir allows you to fluently define your asset pipeline.


5. How to enable maintenance mode in Laravel?
	You can enable maintenance mode in Laravel 5,simply by executing below command.

	To enable maintenance mode
		php artisan down
	To disable maintenance mode
		php artisan up

6. How to get current environment in Laravel 5?
	You may access the current application environment via the environment method.

	$environment = App::environment();

8. What is Method Spoofing in Laravel?
	As HTML forms does not supports PUT, PATCH or DELETE request. So, when defining PUT, PATCH or DELETE routes that are called from an HTML form, you will need to add a hidden _method field to the form. The value sent with the _method field will be used as the HTTP request method:

	Example - 
	<form action="/foo/bar" method="POST">
	    <input type="hidden" name="_method" value="PUT">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>

	To generate the hidden input field _method, you may also use the method_field helper function:

	Example - <?php echo method_field('PUT'); ?>

	In Blade template you can write it as below

	Example - {{ method_field('PUT') }}


12. What are terminable Middleware in Laravel?
	Terminable middleware performs some task after the response has been sent to the browser. This can be accomplished by creating a middleware with terminate method in the middleware. Terminable middleware should be registered with global middleware. The terminate method will receive two arguments $request and $response.





--------------------------------------------------------------------------------------------------------------------

Resource - https://www.onlineinterviewquestions.com/laravel-interview-questions/

1) How to put Laravel applications in maintenance mode
2) What is Laravel?
3) Explain Events in laravel ?
4) Explain validations in laravel?
5) What is the latest version of Laravel?
6) How to install laravel via composer ?
7) List some features of laravel 6 ?
8) What is PHP artisan. List out some artisan commands ?
9) List some default packages provided by Laravel Framework?
10) What are named routes in Laravel?
11) What are the best features of Laravel 8?
12) What is database migration. How to create migration via artisan ?
13) What are service providers in Laravel ?
14) Explain Laravel’s service container ?
15) What is composer ?
16) What is dependency injection in Laravel ?
17) What are Laravel Contract’s ?
18) Explain Facades in Laravel ?
19) What are Laravel eloquent?
20) How to enable query log in Laravel ?
21) What is reverse routing in Laravel?
22) How to turn off CRSF protection for specific route in Laravel?
23) What are traits in Laravel?
24) Does Laravel support caching?
25) Explain Laravel’s Middleware?


---------------------------------------------------------------------------------------------------------------------------------
Reourece Line - http://www.laravelinterviewquestions.com/blog/laravel-advanced-interview-questions-nda/

What is reverse routing in Laravel?
Installing soap module on PHP 7 ubuntu
Generating application key in Lumen
How to get user details by id or email in Laravel?
Sending data to view using redirect in Laravel?
Installing Laravelcollective/html package in laravel 5.5
How to Clear cache in Laravel?
What does "composer dump-autoload" do?
Rollback all migrations in Laravel
Active Record Implementation in Laravel?
Call to a member function connection() on null Laravel Lumen
How to check current installed version of Laravel ?
How to resolve phpunit/phpunit 5.7.8 requires ext-dom * error while installing Laravel 5
Reading writing and deleting a File from disk or filesystem in Laravel 5
How to resolve MassAssignment Exception _token error in Laravel 5?
How to enable query log in Laravel?
How to get records between two date in Laravel using eloquent
What are named routes in Laravel?
How to run Laravel Development server?
How to protect your .env file from public access in Laravel?
Laravel Http to https
Paginating records in Laravel
Cross-Origin Request Blocked error in Laravel 5
Call to undefined function csrf_field()
Create image from base64 string laravel
Difference between –prefer-dist and –prefer-source options in composer
How to secure .env file in Laravel
Non-static method should not be called statically Laravel
Function to get excerpt from Laravel string
Laravel: Sanitize Request Input by using Sanitizing Middleware
Method spoofing in Laravel
Changing storage path permission in Laravel
What is the purpose of the Eloquent cursor() method in Laravel
How to use custom table in Laravel Model?
Using Session in Laravel
Class ‘DB’ not found in Lumen
Ajax code to delete file in laravel
DB prefix in Lumen Framework.
Installing specific version of Laravel with Composer
Step by step guide to display wordpress posts in Laravel 5
findorFail method in Laravel
Laravel get ip address
Image Manipulation in Laravel 5
Using multiple Where clause Query in Laravel.
Laravel migration change column type
What new in Laravel 6
PHP Artisan
PHP artisan migrate command
Run raw query in Laravel.
How to assign multiple middleware to Laravel route ?
php artisan serve not working
php artisan serve stop
Laravel phone number validation
Laravel get server ip
Where not in Laravel
How to create zip files in Laravel?
Creating zip of multiple files and download in Laravel.
Laravel get data from database by id.
List some official packages provided by Laravel.
Service providers in Laravel
How to enable maintenance mode in Laravel 5?
Getting Random rows in Laravel Eloquent.
IN query in Laravel Eloquent
Disabling timestamps in Laravel Eloquent
Explain migrations in Laravel? How can you generate migration.
Read and Write Cookie in Laravel 5
Adding Multiple Order By clause in Laravel
Disabling error handler in laravel
What happens when AUTO_INCREMENT reaches the maximum value?
What is an Initialization function in PHP?
clear-compiled Command in Laravel
PHP artisan optimize command
Laravel delete migration
sqlstate hy000 error 2002 laravel
How to get all records in Laravel?
Laravel get logged in user data
Get user id laravel blade
Check user type in laravel
Laravel run artisan command from controller
php artisan serve
Laravel Admin Panel - Fjord
Laravel Socialite : Authentification OAuth avec Google, Facebook et Github (Social login)
Laravel : Importer, exporter les données en Excel ou CSV avec spatie/simple-excel
Laravel : Générer un QR code avec simple-qrcode
Magni omnis omnis qu
Installer Vue.js dans un projet Laravel
Laravel - Vue.js : Uploader un fichier avec une barre de progression
Installer Bootstrap 5 via npm et laravel Mix dans un projet un Laravel