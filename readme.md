Instrucciones

El proyecto está divido en dos partes, backend y frontend.
Los archivos que se compilan no fueron borrados para no tener que instalar herramientas para hacer la prueba.

1. BACKEND
	
	Se encuentra hecho con laravel
	los archivos principales son los siguientes:
	- app/routes.php: Indica como se consumen los recursos
	- app/controllers/*: son los controladores del RESTful api

	Para poder utilizarlo, es necesario montarlo sobre un servidor de su preferencia
	apuntando hacia la carpeta de public como root (en apache se debe establecer como un host virtual)
	También hay que cambiar la url en app/config/app.php por la que se le de como host virtual (por default es "http://agenda/")
	
	NOTA: a pesar de tener habilitado los CORS, me da unos problemas con la modificación de la imagen, utilice un plugin para chrome ya que es debido a una configuración de seguridad del navegador.

2. FRONTEND
	
	Está hecho a base de un entorno de trabajo llamado angular-gulp
	para poderlo ejecutar tendran que tener instalado nodejs y gulp (de manera global "npm install -g gulp")
	en el archivo 'frontend/src/app/ng.app.js' hasta el final, se encuentran las configuracíones de la ruta de la api, cambiarlas a convenciencia
	por default es 'http://agenda/api/v1'
	
	ejecutar el servidor con el comando 'gulp serve', lo cual creará un'servidor para un ambiente de desarrollo
