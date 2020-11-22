# Hito 2

## Configuración correcta del gestor de tareas y justificación de la misma

La primera idea que se me vino a la cabeza fue usar composer. Composer es el gestor de dependencias por excelencia de PHP (mi lenguaje). Se puede definir además para que sea un gestor de tareas, pero me parecía lo más básico y he querido buscar otras opciones.

Buscando diferentes gestores de tareas, en primer lugar encontré [phulp](https://github.com/reisraff/phulp). El principal problema fue, que al instalarlo y al hacer todo lo que encontré tanto en documentación como en sus ejemplos, no funcionaba. No sé si estará desfasado o la documentación no es muy buena del todo, pero no conseguí que funcionara después de un par de horas intentándolo. 

Después, otro de los mayores problemas que encontré, es que hay muchos gestores de tareas para PHP que son de [pago](https://codecanyon.net/category/php-scripts?tags=task%20manager), y otros que están enfocados al front-end, y por lo tanto, están lejos de lo que buscamos.

Pensé entonces en usar un gestor conocido y que funciona en todos los lenguajes: make. ¿Problema? que es el más usado y no me aportaría mucho. Entonces, volví a intentar de nuevo el primer gestor (que siguió sin funcionar) pero leyendo de nuevo el proyecto vi una nuva opción: [gulp](https://gulpjs.com/docs/en/getting-started/quick-start).

Por lo tanto, instalé [gulp](https://gulpjs.com/docs/en/getting-started/quick-start), ví un [ejemplo](https://blog.zackad.dev/en/2017/12/23/using-gulp-to-automatically-run-phpunit-test-after-saving-file.html) de como usarlo para después más adelante lanzar mis tests  y por último soluciońe un pequeño [problema](https://stackoverflow.com/questions/36897877/gulp-error-the-following-tasks-did-not-complete-did-you-forget-to-signal-async). Con esto, **gulp** ya está listo para usarse y poder crear nuevas recipes.

## Elección y justificación de la biblioteca de aserciones usada

En primer lugar, al buscar bibliotecas de aserciones usadas y php lo primero que encontramos son las aserciones de [PHPUnit](https://phpunit.readthedocs.io/es/latest/assertions.html). Hay muchísimos tipos que nos pueden servir para prácticamente todo lo que queramos, y encontramos una extensa y contrastada documentación por los miles de usuarios que usan esta biblioteca a diario. Además, encontramos la ventaja adicional de ser las aserciones específicas de uno de los marcos de test que usaremos, como explicaremos más adelante.

Otra posibilidad que encontramos es la biblioteca creada por [Benjamin Eberlei](https://laravel-news.com/assertion-library-for-php) y que podemos encontrar en su [GitHub](https://github.com/beberlei/assert). Según explica su creador, la biblioteca no usa recursos adicionales de Symfony (aunque nosotros si lo hacemos en nuestro proyecto) y además, no está orientada a objetos y por esta serie de motivos, hemos decidido prescindir de su uso, aunque para otros futuros proyectos si puede ser interesante.

Como última opción encontramos la biblioteca [Webmozart Assert](https://github.com/webmozart/assert). Vemos que aporta aserciones muy eficientes enfocadas a no necesitar escribir una gran cantidad de código para obtener una implementación segura de las aserciones. Además, vemos que está muy aceptada por la comunidad, con más de [800000](https://github.com/webmozart/assert/network/dependents?package_id=UGFja2FnZS01NDI5NDA3ODI%3D) repositorios que la usan, en contraste de los no más de [5000](https://github.com/beberlei/assert/network/dependents?package_id=UGFja2FnZS01NDg5MzI2Mzg%3D) usos de la biblioteca anterior.

Por todo esto, he decidido hacer uso de la primera y tercera bibliotecas. Con el uso de ambas estoy seguro de poder abarcar todos los casos que necesite en los tests. Ambas son bibliotecas respaldadas por la comunidad y que están actualizadas (ambas han sido actualizadas este año).

## Elección y justificación del marco de pruebas usado
En cuanto a desarrollo de test, nos encontramos con varias opciones:

[Behat](https://docs.behat.org/en/latest/) es un framework de test que está muy enfocado a la comunicación, por ejemplo, es ideal para probar código en el que haya que usar consola o llamadas a API. Permite además desarrollar una programación basada en [BDD](https://en.wikipedia.org/wiki/Behavior-driven_development).

[PHPUnit](https://phpunit.de/) que tiene una amplia y depurada [documentacion](https://phpunit.readthedocs.io/es/latest/). Es uno de los principales marcos de test de php y está muy extendido, de tal manera, que aparte de la documentación, existen muchos foros donde se preguntan y se responden preguntas relacionadas con PHPUnit.

[PHPSpec](http://www.phpspec.net/en/stable/) solo permite test unitarios pero tiene una gran potencia y además tiene funciones que nos permiten programar enfocados a BDD y TDD. Tiene dos funcionalidades principales, **describe** and **run**. Con run podremos ejecutar los test, mientras que con describe, PHPSpec se encargará de darnos un boceto de la clase, función o atributo que necesitemos de cara a pasar nuestra etapa roja en el ciclo Red-Green-Refactor. 

Finalmente me he decantado por usar PHPUnit ya que posee bastante documentación y está muy extendido. Además, es probable que en un futuro se realicen también test de Behat, ya que me parecen bastante intuitivos y claros, aunque no para los test unitarios, donde considero PHPUnit superior.

## Correcta relación entre avance de código (incluyendo los tests) e HUs

Se han intentado arreglar algunos de los problemas que se vieron en el anterior hito. Actualmente solo ha dado tiempo de profundizar en [[HU1] Añadir un nuevo jugador al club](https://github.com/manuelorantes/EloPuertaElvira/issues/7).

## Tests significativos y/o avance del proyecto en sí más allá de lo básico, incluyendo sugerencias hechas en las correcciones y evaluaciones de hitos anteriores

Como hemos visto más arriba, se ha intentado acabar con [[HU1] Añadir un nuevo jugador al club](https://github.com/manuelorantes/EloPuertaElvira/issues/7) y para ellos se han realizado [5 test](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Tests/Entity/AdminTest.php) que exploran todas las circunstancias de esta HU.



