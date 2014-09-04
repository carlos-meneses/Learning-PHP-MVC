<h1>Learning PHP MVC</h1>
<p>Este pequeño proyecto es para el aprendizaje de PHP MVC en su modo más simple. Sin necesidad de activar el mod_rewrite y con un ejemplo de una lista de tareas (To Do List) incluido.</p>

<h3>Nota</h3>
<p>Se sabe que usando el mod_rewrite las URLs son más atractivas y claras. Sin embargo, este proyecto no se trata de la construcción de un framework para la producción, sino para el aprendizaje del Patrón MVC (Modelo, Vista, Controlador). Este proyecto busca ser los más simple posible.</p>

<h3>front_controller.php</h3>

<p>El front_controller.php viene siendo el controlador principal de nuestra aplicación, el cual es instanciado en un único archivo index.php, que se encargará de recibir todas las peticiones http (GET/POST), hasta los momentos.</p>

<p>Este controlador es el que realiza todo el trabajo. Se encarga de realizar el llamado de nuestros controladores con sus respectivos métodos, de acuerdo a los parámetros que reciba por la url.</p>

<h3>rb.php (RedBeanPHP)</h3>
<p>Este proyecto hace el uso de RedBeanPHP que es una ORM de fácil integración en nuestros proyectos, debido a sus convenciones y sin necesidad de configuración. Simplemente descargar y ejecutar en nuestros proyectos.</p>

<p>RedBeansPHP nos da una gran facilidad para trabajar con nuestras bases de datos. Inclucibe es posible trabajar con relaciones y más. <a href="http://redbeanphp.com/" target="_blank">Más información aquí</a></p>

<h3>todo.sql</h3>
<p>Se incluye el archivo sql que va junto con el ejemplo para que pueda probarlo. Debe crear una base de datos llamado "todo" antes de importar el archivo sql.</p>
