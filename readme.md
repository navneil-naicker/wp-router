WP Router is a plugin for WordPress that brings MVC feel to WordPress. WP Router uses WordPress core functionalities to wrap the MVC architecture. WP Router should be used on a fresh new WordPress installation.

## Installation Steps:
1. Install `WP Router` from `WordPress Plugins`
2. Create 3 directories in your themes folder called `controllers`, `models` and `views`

## How to create routes?

On your WordPress theme directory look for the file called index.php. Open the file in your favorite text editor and add the following code.

`Router::get('/', 'SomeController@index'); //Register get route`

`Router::post('/', 'SomeController@save'); //Register post route`

## VERY IMPORTANT

Add the following line of code at the end of all the routes in index.php. This line is the very important for the plugin to start.

`$dispatcher = Router::render();`

## Controller and Method

All the controllers should be stored in a directory called controllers inside your themes directory. Below is an example of a controller and method.

    class SomeController{

        public function index(){
            ....
        }

    }

## Model

All the models should be stored in a directory called models inside your themes directory. Below is an example of a model and how to call a model from a controller.

    class User{

        public function get(){
            ....
        }

    }

## View

All the views should stored in a directory called views inside your themes directory. Create an empty file and name is whatever you like with the extension .php. That's it. Just a typical php file.

## Examples: controller, method and view

The code below calls the controller `SomeControler` and fires `index` method and calls the view `home/index` which is stored inside `views` directory in your themes directory.

    class SomeController{

        public function index(){
            wp_router_view('home/index'); //Include the view
        }

    }

## Examples: controller, method, model and view

I'm including a model called User which is stored as a php class inside models directory inside my theme.

    class SomeController{

        public function index(){

            wp_router_model('User'); //Call the model
            $User = new User; //Call the class
            
            wp_router_view('home/index'); //Include the view
        }

    }

## Examples: controller, method, model, view and params

Just by passing the variable $params to the method, you can easily acess all the wild params from your route to your method.

    class SomeController{

        public function index( $params ){

            wp_router_model('User'); //Call the model
            $User = new User; //Call the class
            
            wp_router_view('home/index'); //Include the view
        }

    }

## What's Next?

You can download the example theme codes from here.


## Frequently Asked Questions

1. <b>Does this work with WordPress post or pages?</b> Works with post, page and any other post types.

2. <b>Do I still need to create WordPress pages?</b> Yes, you'll still need to create WordPress pages as usual.

3. <b>What's the purpose of this plugin?</b> To bring MVC architecture to WordPress when it comes to custom WordPress theme and application development and which is easy to manage.

4. <b>Does any of the WordPress core functionality changes?</b> No, you can use the functions, database queries, filters and actions as usual.
