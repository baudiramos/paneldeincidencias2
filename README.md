# paneldeincidencias2
Panel de incidencias conectado con formulario web.

_Este es mi primer código que publico, puede contener fallos, cualquier fallo haganlo saber en la sección "issues"._

#### El formulario es el archivo "incidencias.php".

Para que funcione tenemos que crear una base de datos con las siguientes tablas:


### Esta opción  es opcional para la tabla "users" ya que el proyecto incluye una app que te registra directamente los usuarios en la base de datos. El fichero se llama "register.php".

#### Se recomienda eliminar el archivo register.php una vez estén los usuarios dados de alta.


		
Primero creamos una  tabla llamada users con 3 columnas.

### Las columnas han de ser así 📋:

Para la tabla "users":


		id = hay que activar la opción A_I para que por cada registro que se haga del formulario, se auto incremente el ID.

		username  = El tipo ha de ser varchar 

		password = El tipo ha de ser varchar
		
		
#### Esta opción es necesaria para el correcto funcionamiento del panel 🔧 :

#### Crearemos las siguientes columnas: 

Para la tabla "incidencias":

	id = hay que activar la opción A_I para que por cada registro que se haga del formulario, se auto incremente el ID.

	persona = varchar

	mantenimiento = varchar

	nombre = varchar

	email = varchar

	telefono = varchar

	incidencia = varchar

	mensaje = varchar

