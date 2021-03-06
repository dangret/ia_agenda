OVERVIEW
========
* [1. BACKEND](#1-backend)
	* [1.1. INSTALACION](#11-instalacion)
		* [1.1.1. LINUX (DEBIAN DISTs)](#111-linux-debian-dists)
			* [1.1.3. HOST](#113-host)
			* [1.1.4 NGINX](#114-nginx)
		* [1.1.2 WINDOWS](#112-windows)
			* [1.1.2.1 HOST](#1121-host)
			* [1.1.2.2 WAMP](#1122-wamp)
			* [BASE DE DATOS](#base-de-datos)
	* [1.2 DESCRPCIÓN CÓDIGO](#12-descrpción-código)
* [2. FRONTEND](#2-frontend)
	* [2.1 INSTALACION](#21-instalacion)
		* [2.1.1 LINUX (DEBIAN DISTs)](#211-linux-debian-dists)
			* [2.1.1.1 NodeJS](#2111-nodejs)
				* [3 2.1.1.1 GULP](#3-2111-gulp)
		* [2.1.2 WINDOWS](#212-windows)
			* [2.1.1.1 NodeJS](#2111-nodejs)
				* [3 2.1.1.1 GULP](#3-2111-gulp)
	* [2.2 FUNCIONAMIENTO ](#22-funcionamiento)

INSTRUCCIONES
=============
El proyecto está divido en dos partes, backend y frontend.
Los archivos que se compilan no fueron borrados para no tener que instalar herramientas para hacer la prueba.

* # 1. BACKEND #

	* ## 1.1. INSTALACION ##

		* ### 1.1.1. LINUX (DEBIAN DISTs) ###

			* #### 1.1.3. HOST ####

				Ejecutar el siguiente comando en la terminal para agregar a los host el enmascaramiento (equivalente a ejecutar el archivo)

				```nash
					sudo echo "127.0.1.1	agenda" >> /etc/hosts 
				```

			* #### 1.1.4 NGINX ####

				Introducir el siguiente código en el archivo de configuración localizado en */etc/nginx/sites-available/default*
    				    
				```nginx
    				server {
    				    listen 80;
    				
    				    root /home/daniel/jobbies/ia/agenda/backend/public;
    				    index index.php index.html index.htm;
    				
    				    server_name agenda;
    				
    				    location / {
    				        try_files $uri $uri/ /index.php?$query_string;
    				        fastcgi_read_timeout 900;
    				    }
    				
    				    location ~ \.php$ {
    				        try_files $uri /index.php =404;
    				        fastcgi_split_path_info ^(.+\.php)(/.+)$;
    				        fastcgi_pass unix:/var/run/php5-fpm.sock;
    				        fastcgi_index index.php;
    				        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    				        include fastcgi_params;
    				        fastcgi_read_timeout 900;
    				    }
    				}
    			```

				Reemplazar */home/daiel/jobbies/agenda* por la ruta en la que se haya descargado el proyecto. como se puede observar apunta hacia la carpeta public del proyecto backend (PHP - Laravel).

		* ### 1.1.2 WINDOWS ####

			NOTA: Si no quieres complicarte la existencia, ubicar el proyecto en C:/wamp/www/ 

			* #### 1.1.2.1 HOST: ####

				Editar el archivo *C:/WINDOWS/system32/drivers/etc/hosts* y agregar 

					127.0.1.1 	agenda

			* #### 1.1.2.2 WAMP ####

				1. Descarga e instalar WAMP [aqui](http://sourceforge.net/projects/wampserver/files/WampServer%202/Wampserver%202.5/wampserver2.5-Apache-2.4.9-Mysql-5.6.17-php5.5.12-32b.exe/download) con valores predeterminados (next, next, next ... next.).

				2. Agregar el host virtual en C:\wamp\bin\apache\Apache2.2.21\conf\httpd.conf y descomentar el incluir hosts virtuales:
	
					```apache
						#Virtual hosts
						#Include conf/extra/httpd-vhosts.conf
					```

					cambiar por: 
					
					```apache
						#Virtual hosts
						Include conf/extra/httpd-vhosts.conf
					```

				3. Asegurarnos que el módulo de rewrite esté habilitado (sin comentario):

					LoadModule rewrite_module modules/mod_rewrite.so (necesario para las urls de laravel)

				3. Agregar el host virtual en el siguiente archivo *C:\wamp\bin\apache\Apache2.2.21\conf\extra\httpd-vhosts.conf*

					```apache
				    	<VirtualHost: *80>
				    		DocumentRoot "C:/wamp/www/ia_agenda/backend/public"
				    		ServerName agenda
				    	</VirtualHost>    
					```

					valores DocumentRoot y ServerName cambiarlos a necesidades del entorno, 
					aunque los valores utilizados están destinados a ser los necesarios si se sigue la guía al pie de la letra.

				A este punto, la configuración del servidor ya debería de estar lista. 
				tan solo falta ejecutar (o reiniciar) wamp desde la barra de notificaciones
				para que se puea utilizar. 
				
				**Listo!**. la API ya puede ser utilizada desde http://agenda/api/v1/. [Doc](http://docs.iaagenda.apiary.io/) 

			* #### BASE DE DATOS: ####

					**[DB_NAME]** = agenda_dev 
				
				Al instalar WAMP se instaló consigo MySQL, simplemente cree una base de datos ya sea en la terminal o en DBMS de su preferencia

					create database **[DB_NAME]**;

				Una vez que la base de datos esté creada, se debe de configurar el archivo *backend/app/config/local/database.php*
				identificar el siguiente código y establecer los parametros según el entorno de pruebas  

				```PHP		    		
		    		'mysql' => array(
		    		    'driver'    => 'mysql',
		    		    'host'      => 'localhost',
		    		    'database'  => '[DB_NAME]',
		    		    'username'  => '[USERNAME]',
		    		    'password'  => '[PASSWORD]',
		    		    'charset'   => 'utf8',
		    		    'collation' => 'utf8_unicode_ci',
		    		    'prefix'    => '',
		    		),
				```
				
				Una vez configurado el el proyecto a la base de datos, crear la tablas con el siguiente ubicando en */backend/* 

				```bash		    		
					php artisan migrate		
				```
				Comprobar en la BD que las tablas estén generadas. 

				También ajunto una copia de la creación de la BD. */create_db.sql*

			
	* ### 1.2 DESCRPCIÓN CÓDIGO: ###
		
		los archivos principales son los siguientes:
		
		- app/routes.php: Indica como se consumen los recursos, es el archivo principal del framework el cual indica el enrutamiento
		- app/controllers/: Es la carpeta en donde se guardan los controladores
		
			- ContactController: 
		
				El controlador del recurso contacto, en *app/routes.php* se indica que cuando la ruta sea **/api/v1/contacts** este buscará 
				detro de este archivo y respondera a las funciones según las peticiones.
				 en la [API](http://docs.iaagenda.apiary.io/) se encuentra la referencia de como utilizarlo
		
		    
		segun las configuraciones necesarias en su entorno de trabajo despues, deberá de ejecutar el siguiente comando (estando en la carpeta 'backend')
		    
		    php artisan migrate
		
		siendo posible generarla, la anexó de igual forma *create_db.sql* 

		**NOTA:** A pesar de tener habilitado los CORS, me da unos problemas con la modificación de la imagen, utilice un plugin para chrome ya que es 	debido a una configuración de seguridad del navegador.

* # 2. FRONTEND #

	* ## 2.1 INSTALACION ##

		* ## 2.1.1 LINUX (DEBIAN DISTs) ##

			* ### 2.1.1.1 NodeJS ###
				
				```bash
					sudo apt-get update; sudo apt-get install nodejs
				```

				* #### 3 2.1.1.1 GULP ####
				
				```bash
					sudo npm install -g gulp
				```

		* ## 2.1.2 WINDOWS ##

			* ### 2.1.1.1 NodeJS ###

				Es un interprete y un framework que nos permite utilizar javascript del lado del servidor necesario para poder ejecutar
				el entorno de desarrollo con el cual se realizó del frontend 
				
				Para la instalación de NodeJS en windows, se deberá descargar de [aqui]() y a manera de windows, dar next, next, next!
				
				* #### 3 2.1.1.1 GULP ####
		
				Gulp es un manejador de tareas programado en javascript, por lo tanto es neceario de NodeJS para su ejecución, 
				se instala con el manejador de paquetes de NodeJS **npm** 

					npm install -g gulp

				*[N.T. el parametro -g es para que se instale de forma global, ya que puedes instalarlo sobre una dependencia de un projecto]*				

	* ## 2.2 FUNCIONAMIENTO ## 
	
		EL Frontend se encuentra desarrollado en un entorno de trabajo llamado angular-gulp (de Yeoman)

		El entorno de trabajo es extenso, más sin embargo, lo importante del projecto se encuentra en la ruta *src/app* 
		desde este punto se podrá encontrar la siguiente estructura:
			
			├── app
			│ 	├── components
			│ 	├── fonts
			│ 	├── index.less
			│ 	├── main
			│ 	│   ├── main.html
			│ 	│   └── views
			│ 	│       ├── contactos
			│ 	│       │   ├── ContactCtrl.js
			│ 	│       │   ├── ContactDataCtrl.js
			│ 	│       │   ├── ContactInfo.html
			│ 	│       │   ├── Contact.js
			│ 	│       │   ├── contacts.html
			│ 	│       │   ├── contacts.less
			│ 	│       │   └── StatService.js
			│ 	│       └── dashboard
			│ 	│           ├── DashboardCtrl.js
			│ 	│           └── dashboard.html
			│ 	│       
			│ 	├── ng
			│ 	│   ├── controller
			│ 	│   ├── directive
			│ 	│   ├── filter
			│ 	│   └── service
			│ 	├── ng.app.js
			│ 	├── assets
			│ 	├── index.html
			├── assets
			└── index.html

		En el archivo *frontend/src/app/ng.app.js* **linea 60**, se encuentran las configuracíones de la ruta de la api, 
		en caso de no estar utilizando los valores aquí utilizados cambiarlos a conveniencia. Por default es *http://agenda/api/v1*

		```javascript
			angular.module('agenda')
    			.constant('config', {
    		    	appName: 'agenda',
    		    	appVersion: 1.0,
    		    	apiUrl: 'http://agenda/api/v1/',
    		    	baseUrl: 'http://agenda/'
    			});
		```

	
		Ubicandonos en *src* se listarán algunos de los archivos más importantes

		* **ap/ng/** Todo aquello que sea lógica de la aplicación y sea "compartido" por varios controladores, se anexa en esta carpeta 
			separandose por su tipo (logica de negocio angular)
		* **app/ng.app.js** el archivo principal de angular, establece las configuraciones (como las rutas) y variables 
			de la aplicación
		* **app/views** carpeta que guarda las vistas y controladores del sitio web, organizadas por su respectiva carpeta-por-vista 
			por ejemplo, la vista dashboard, tendra su carpeta dashboard, y dentro su archivo html y su respectivo archivo js (un less en caso de ser necesario)
		* **assets/** aquí se guardan los recursos necesarios para la pagina, como css, scripts e imagenes
		* **index.html** sirve como contenedor para el entorno de desarrollo, este es el html principal
		
		Para ejecutar el servidor, ejecutar el servidor con el comando :

		```bash
			gulp serve
		```
		
		lo cual creará un servidor de NodeJS y lanzará el navegador con la ruta para un ambiente de desarrollo

		**Listo!**

		**GRACIAS.**
