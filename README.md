# SF3.4
SF3.4 on PHP 7.2 build for docker with xdebug,redis pdo. By default x-debug is disabled you can enabled/disable from docker-compose.yml  
```
    volumes:
        - "./manifest/config/nginx.conf:/etc/nginx/nginx.conf:ro"
        - "./manifest/config/x-debug.ini:/usr/local/etc/php/conf.d/x-debug.ini:ro"
        - "./manifest/config/supervisord.conf:/etc/supervisor/conf.d/supervisord.conf:ro"
        - "./manifest/app:/app"
```

## Installation
```
composer create-project symfony/website-skeleton:3.4.* app/
composer create-project symfony/framework-standard-edition:3.4.* app/
composer install
```

#Available Branches
master
knpmenu
doctrine

## Generate Custom Bundle
```
php bin/console generate:bundle
```

## Getting Started

 ```
 docker-compose up -d
 ```


## Connect to Container
 ```
 ./connect
 ```

## Build Container
 ```
 ./build.sh
 ```

## Configure X-Debug on PHPStorm
#### Preference -> PHP -> Servers
    1. + (ADD)
	   Name: Give the project Name
	   
	   Host: sf3.docker
	   

    2. Check Use path mappings
       
       Select the path of source where it mounted
       host_dir:/container_dir
       www/my_project:/app

#### Run -> Edit Configuration
    1. + (ADD) PHP Remote Debug
	    
	    Name: Give Debugger Name (Project Name Debug)
	   
	    Server: Select project which we have just created
	    
	    Idk key(session id): docker (if you change on x-debug.ini change it.
        
        
        
    