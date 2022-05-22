# Laravel Handbook

## Laravel Versions

| Laravel Version | Release Date        | PHP Version      |
| --------------- | ------------------- | ---------------- |
| 6 LTS           | September 3, 2019   | ≥ 7.2 and ≤ 8.0  |
| 7               | March 3, 2020       | ≥ 7.2 and ≤ 8.0  |
| 8               | September 8, 2020   | ≥ 7.3 and ≤ 8.1  |
| 9               | February 8, 2022    |  ≥ 8.0 and ≤ 8.1 |
| 10              | February 7, 2023    | ≥ 8.1            |
| 11              | January 2024        |                  |

## Pre-requisites

- XAMPP / MAMP / WAMP / LAMP
- VSCode / PHPStorm
- PHP
- Composer
- Node.js (install via `brew isntall node`)
- Git (install via `brew install git`)

## Installation & Setup Guide

- Install 'MAMP & MAMP Pro'.
- Use 'AppClearer' and uninstall 'MAMP Pro' from your Applications folder.
- Open up 'MAMP' and select the following options:
  - `Web server`: `Apache`
  - `PHP version`: `8.0.8`
- Open up 'MAMP' -> Preferences -> Ports and click on the following option:
  - `Set Web & MySQL ports to`: `80 & 3306`
- Install PHP via `brew install php`.
- Install Composer via `brew install composer` (type command `composer -V` in Terminal to verify successful installation).
- Command to create a new Laravel project using composer:
  - `composer create-project laravel/laravel project-laravel`
  - `composer create-project laravel/laravel="8.4.*" project-laravel` (to create a project using a specific version of Laravel)
    - `composer`: calls the Composer executable
    - `create-project`: is the Composer command that creates a new project
    - `laravel/laravel` - PHP project might use a skeleton, in our case that is the Laravel Framework. Every package added there has its unique name. Laravel framework's unique name is laravel/laravel. Giving an equal sign next the unique name you can also specify the version of Laravel you are going to download and use in your project.
    - `project-laravel`: is the directory in which your project will be created, relative to where you are in your Terminal application right now.
- Where to create the project?
  - Location: '/Applications/XAMPP/xamppfiles/htdocs' (XAMPP)
  - Location: '/Applications/MAMP/htdocs' (MAMP)
  - Note: If you don't plan to use Apache - it's fine, that is not required. Then, you can create the project ANYWHERE you wish. Remember, then you'll have to run the development web server from within the project directory using command: `php artisan serve`.
- Setting up virtual host in Apache:
  - Open up '/Applications/XAMPP/xamppfiles/etc/httpd.conf' (XAMPP)
  - Open up '/Applications/MAMP/conf/apache/httpd.conf' (MAMP)
  - Find 'httpd-vhosts.conf' and uncomment the line.
  - Open up '/Applications/XAMPP/xamppfiles/etc/extra/httpd-vhosts.conf' (XAMPP)
  - Open up '/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf' (MAMP) and put the configuration given below:
  
    ```php
    # Virtual Hosts
    #
    # Required modules: mod_log_config

    # If you want to maintain multiple domains/hostnames on your
    # machine you can setup VirtualHost containers for them. Most configurations
    # use only name-based virtual hosts so the server doesn't need to worry about
    # IP addresses. This is indicated by the asterisks in the directives below.
    #
    # Please see the documentation at 
    # <URL:http://httpd.apache.org/docs/2.4/vhosts/>
    # for further details before you try to setup virtual hosts.
    #
    # You may use the command line option '-S' to verify your virtual host
    # configuration.

    #
    # Use name-based virtual hosting.
    #
    NameVirtualHost *:80

    #
    # VirtualHost example:
    # Almost any Apache directive may go into a VirtualHost container.
    # The first VirtualHost section is used for all requests that do not
    # match a ServerName or ServerAlias in any <VirtualHost> block.
    #
    <VirtualHost *:80>
        DocumentRoot "/Applications/MAMP/htdocs/project-laravel/public"
        ServerName laravel.test
        ServerAlias www.laravel.test
        ErrorLog "logs/project-laravel.test-error_log"
        CustomLog "logs/project-laravel.test-access_log" common
    </VirtualHost>

    <VirtualHost *:80>
        ServerAdmin webmaster@dummy-host2.example.com
        DocumentRoot "/Applications/MAMP/Library/docs/dummy-host2.example.com"
        ServerName dummy-host2.example.com
        ErrorLog "logs/dummy-host2.example.com-error_log"
        CustomLog "logs/dummy-host2.example.com-access_log" common
    </VirtualHost>
    ```

  - To set up hosts on the system, enter the command `sudo vim /etc/hosts` and add the following line:  
  `127.0.0.1   laravel.test`
  - Note: Make sure you are running Apache on port 80

## VSCode Extensions

- Auto Close Tag
- Bracket Pair Colorizer 2
- DotENV
- Highlight Matching Tag
- IntelliCode
- JavaScript (ES6) code snippets
- Laravel Blade Snippets
- Laravel Blade Spacer
- Laravel Extra Intellisense
- Laravel Easy Blade Snippets
- Laravel goto view
- Material Icon Theme
- Node.js Modules Intellisense
- npm Intellisense
- PHP Intelephense (Ben Mewburn)
- PHP Extension Pack (Felix Becker)
- PHP import checker
- PHP Namespace Resolver
- Path Intellisense
- phpfmt - PHP formatter

## Useful VSCode Shortcuts

Ctrl + `: Terminal
Command + Shift + P: Command Pallet
Command + P: Go to a file
Shift + Option + F: Format Document

## Important Links

- [Laravel Official Documentation](https://laravel.com/docs/9.x)
- [Laravel Cheatsheet](https://github.com/piotr-jura-udemy/laravel-cheat-sheet)

## Laravel Folder Structure

- `app`: it contains all the business logic of your application, whether it is handling a request or interacting with the database.
- `config`: you can configure your application from here.
- `database`: it is used for modifying and working with your database schema.
- `public`: it contains some entry points to your application - index.php. Additionally it might contains some stylesheets, scripts, images etc.
- `resources`: it also contains some stylesheets, scripts as well as translations and some HTML. This is where you will be putting the views, and this is why we have this MVC separation.
  - View: resources/views/
  - Model: app/Models/
  - Controller: app/Http/Controllers/
- `routes`: this is also an important folder. You can configure routes to your application here. Routes are entry points to your app.
- `storage/vendor`: Contains third party libraries you will install including Laravel.
- `tests`: Contains unit tests.
- `.env`: Contains some environment specific settings for your app, mostly credentials (e.g. database credentials, which might be different in local machine than settings which is in prod server)
- `composer.json`: Manage any third party PHP dependencies from here.
- `package.json`: Manage any thid party Frontend/JavaScript/Node dependencies from here.
- `artisan`: This is actually a PHP script that will run your application on the command line. Enter `php artisan` commmand to see a list of command when you are inside the project directory.
  - `queue` (category): These commands will run and process all the background jobs of your application.
  - `route:list`: This command will give you a list of all the registered routes in your application.
  - `migrate` (category): These commands can be used to manage the database schema.
  - `make` (category): These commands can be used to scaffold code (a code generation technique related to database access in some model–view–controller frameworks).
  - We can write our own commands to perform utility functions for your app (e.g. command to send emails), for details visit: [https://laravel.com/docs/9.x/artisan#writing-commands](https://laravel.com/docs/9.x/artisan#writing-commands)
  - `tinker`: This will start a separate shell and will let you interact with your Laravel application through a command line.
  - `serve`: This will start our application on the PHP development server [http://localhost:8000](http://localhost:8000) without any setting up a complicated server like Apache / Nginx.

## Routing

- If someone visits your site then every single request they made are always directed into one single PHP file i.e. public/index.php file.
- From this point on the router component takes over, its job is to understand the URL and decide what to do with it next, passing it to our controller.
- So, first you would have to define some routes. You can define routes that are static or dynamic. Static means you just match an exact text e.g. /posts, or dynamic which means you match part of the text but then part of the route can be dynamic e.g. /posts/{id} (id can accept different numbers as parameters).
- Once the matching route is found it will execute specific code present in the respective controller. Controller is a piece of code that handles our request. Hence, the job of router is to pass the request to specific controller and the job of controller is to generate a response.
- In Laravel routes are defined inside routes/api.php and routes/web.php files. This separation is due to different requirements of normal web pages and API responses, which typically return just the data in JSON format. Typical websites rely on cookies and sessions, while APIs on the other hand, might need some rate limiting.
- `Route` class has some static methods, and those static method names corresponds to the HTTP verb names like GET, POST, PUT/PATCH or DELETE.
- The static methods accept two parameters. The first one is the URI of route we are trying to match, the second one is the controllers. Now the controller this can be either a name of the method in a class, or it can be an anonymous function. The controller's ultimate responsibility is to return some kind of response, this can be either HTML, plain text or an image.
- To get the list of all the routes defined in your application: `php artisan route:list`
- You can add name to routes using name() function. Having named routes is very useful whenever you need to generate a URL to a certain page it's better to use some name you can remember instead of relying on the URL that might easily change in the future.
- Route parameters are enclosed in curly braces and should have a name. Name should consist of alphabetic characters and underscores.
- You can define as many parameters as you wish, but then they will passed to the function in the order they are defined and the name of those parameters does not matter.
- If you don't want a router parameter to be always available you can use optional parameter, but in such case you should mandatorily add a default value to it.
- If you want a router parameter to be a number and not a string you can do that using where() function.
- To add a constraint globally you can go to 'app/Providers/RouteServiceProver.php' file and add the pattern constrain at the end of boot() method.

    ```php
    // Source filename: routes/web.php
    <?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/', function () {
        return 'Home page';
    })->name('home.index');

    // Creating new routes
    // Adding names to routes
    Route::get('/contact', function () {
        return 'Contact page';
    })->name('home.contact');

    // Route parameters
    // Constraining possible route parameter values (single parameter syntax). Key is parameter name and value is a regex to match.
    Route::get('/posts/{id}', function ($postId) {
        return 'Blog post ' . $postId;
    })->where('id', '[0-9]+')->name('posts.show');

    // Optional parameters
    // Constraining possible route parameter values (multiple parameter syntax)
    Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
        return 'Posts from ' . $daysAgo . ' days ago';
    })->where([
        'days_ago' => '[0-9]+'
    ])->name('posts.recent.index');
    ```

    ```php
    // Source filename: app/Providers/RouteServiceProvider.php
    <?php

    namespace App\Providers;

    use Illuminate\Cache\RateLimiting\Limit;
    use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\RateLimiter;
    use Illuminate\Support\Facades\Route;

    class RouteServiceProvider extends ServiceProvider
    {
        /**
        * The path to the "home" route for your application.
        *
        * Typically, users are redirected here after authentication.
        *
        * @var string
        */
        public const HOME = '/home';

        /**
        * Define your route model bindings, pattern filters, and other route configuration.
        *
        * @return void
        */
        public function boot()
        {
            $this->configureRateLimiting();

            $this->routes(function () {
                Route::middleware('api')
                    ->prefix('api')
                    ->group(base_path('routes/api.php'));

                Route::middleware('web')
                    ->group(base_path('routes/web.php'));
            });

            // Adding global constrain for 'id' route parameter
            Route::pattern('id', '[0-9]+');
        }

        /**
        * Configure the rate limiters for the application.
        *
        * @return void
        */
        protected function configureRateLimiting()
        {
            RateLimiter::for('api', function (Request $request) {
                return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
            });
        }
    }
    ```
