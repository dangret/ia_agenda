#INSTRUCCIONES

El proyecto está divido en dos partes, backend y frontend.
Los archivos que se compilan no fueron borrados para no tener que instalar herramientas para hacer la prueba.

##1. BACKEND
	###1.1 INSTALACION:
		####1.1.2 LINUX (DEBIAN DISTS):
			
			######1.1.3 HOST:
				Es necesario enmascarar la ip, para a la hora de configurar el host virtual tener un alias. para ello ejecute el siguiente comando:

				    sudo echo "127.0.1.1	agenda" >> /etc/hosts 

			######1.1.4 NGINX:

				Introducir el siguiente código en el archivo de configuración localizado en "/etc/nginx/sites-available/default"

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

				Reemplazar '/home/daiel/jobbies/agenda' por la ruta en la que se haya descargado el proyecto.
				Como se puede observar apunta hacia la carpeta public del proyecto backend (PHP - Laravel).

		####WINDOWS:

			NOTA: Si no quieres complicarte la existencia, ubicar el proyecto en C:/wamp/htdocs/ 

			######HOST:
				
				Editar el archivo *C:/WINDOWS/system32/drivers/etc/hosts*  y agregar 

				    **127.0.1.1 agenda**

			######WAMP:

				1. Descarga e instalar WAMP [aqui!](http://sourceforge.net/projects/wampserver/files/WampServer%202/Wampserver%202.5/wampserver2.5-Apache-2.4.9-Mysql-5.6.17-php5.5.12-32b.exe/download) con valores predeterminados (next, next, next ... next.).

				2. Agregar el host virtual en C:\wamp\bin\apache\Apache2.2.21\conf\httpd.conf y descomentar el incluir hosts virtuales:

				    # Virtual hosts
				    #Include conf/extra/httpd-vhosts.conf

				cambiar por: 

				    # Virtual hosts
				    Include conf/extra/httpd-vhosts.conf

				3. Asegurarnos que el módulo de rewrite esté habilitado (sin comentario):

					LoadModule rewrite_module modules/mod_rewrite.so (necesario para las urls de laravel)

				3. Agregar el host virtual en el siguiente archivo C:\wamp\bin\apache\Apache2.2.21\conf\extra\httpd-vhosts.conf
				    
				    <VirtualHost: *80>
				    	DocumentRoot C:/wamp/htdocs/ia_agenda/backend/public
				    	ServerName agenda
				    </VirtualHost>    

				valores DocumentRoot y ServerName cambiarlos a necesidades del entorno, aunque los valores utilizados están destinados a ser los necesarios si se sigue la guía al pie de la letra.

			######MYSQL:

	###FUNCIONAMIENTO:
		Se encuentra hecho con laravel
		los archivos principales son los siguientes:
		- app/routes.php: Indica como se consumen los recursos
		- app/controllers/*: son los controladores del RESTful api

		Para poder utilizarlo, es necesario montarlo sobre un servidor de su preferencia
		apuntando hacia la carpeta de public como root (en apache se debe establecer como un host virtual)
		También hay que cambiar la url en app/config/app.php por la que se le de como host virtual (por default es "http://agenda/")
		
		Para crear la base de datos, debebera de configurar el archivo app/config/local/database.php 
		    
		    'mysql' => array(
		        'driver'    => 'mysql',
		        'host'      => 'localhost',
		        'database'  => 'db_name',
		        'username'  => 'root',
		        'password'  => 'secret',
		        'charset'   => 'utf8',
		        'collation' => 'utf8_unicode_ci',
		        'prefix'    => '',
		    ),
		    
		segun las configuraciones necesarias en su entorno de trabajo
		despues, deberá de ejecutar el siguiente comando (estando en la carpeta 'backend')
		    
		    php artisan migrate
		
		siendo posible generarla, la anexó de igual forma 'create_db.sql'
	
		NOTA: a pesar de tener habilitado los CORS, me da unos problemas con la modificación de la imagen, utilice un plugin para chrome yaque es 	debido a una configuración de seguridad del navegador.

#2. FRONTEND
	
	Está hecho a base de un entorno de trabajo llamado angular-gulp
	para poderlo ejecutar tendran que tener instalado nodejs y gulp (de manera global "npm install -g gulp")
	en el archivo 'frontend/src/app/ng.app.js' hasta el final, se encuentran las configuracíones de la ruta de la api, cambiarlas a convenciencia
	por default es 'http://agenda/api/v1'
	
	ejecutar el servidor con el comando 

	    gulp serve
	    
	lo cual creará un'servidor para un ambiente de desarrollo
