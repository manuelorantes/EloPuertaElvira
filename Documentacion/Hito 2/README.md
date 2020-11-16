# Hito 2

## Configuración correcta del gestor de tareas y justificación de la misma

La primera idea que se me vino a la cabeza fue usar composer. Composer es el gestor de dependencias por excelencia de PHP (mi lenguaje). Se puede definir además para que sea un gestor de tareas, pero me parecía lo más básico y he querido buscar otras opciones.

Buscando diferentes gestores de tareas, en primer lugar encontré [phulp](https://github.com/reisraff/phulp). El principal problema fue, que al instalarlo y al hacer todo lo que encontré tanto en documentación como en sus ejemplos, no funcionaba. No sé si estará desfasado o la documentación no es muy buena del todo, pero no conseguí que funcionara después de un par de horas intentándolo. 

Después, otro de los mayores problemas que encontré, es que hay muchos gestores de tareas para PHP que son de [pago](https://codecanyon.net/category/php-scripts?tags=task%20manager), y otros que están enfocados al front-end, y por lo tanto, están lejos de lo que buscamos.

Pensé entonces en usar un gestor conocido y que funciona en todos los lenguajes: make. ¿Problema? que es el más usado y no me aportaría mucho. Entonces, volví a intentar de nuevo el primer gestor (que siguió sin funcionar) pero leyendo de nuevo el proyecto vi una nuva opción: [gulp](https://gulpjs.com/docs/en/getting-started/quick-start).

Por lo tanto, instalé [gulp](https://gulpjs.com/docs/en/getting-started/quick-start), ví un [ejemplo](https://blog.zackad.dev/en/2017/12/23/using-gulp-to-automatically-run-phpunit-test-after-saving-file.html) de como usarlo para después más adelante lanzar mis tests  y por último soluciońe un pequeño [problema](https://stackoverflow.com/questions/36897877/gulp-error-the-following-tasks-did-not-complete-did-you-forget-to-signal-async). Con esto, **gulp** ya está listo para usarse y poder crear nuevas recipes.

## Elección y justificación de la biblioteca de aserciones usada

## Elección y justificación del marco de pruebas usado
En cuanto a desarrollo de test, nos encontramos con varias opciones:

[Behat](https://docs.behat.org/en/latest/) es un framework de test que está muy enfocado a la comunicación, por ejemplo, es ideal para probar código en el que haya que usar consola o llamadas a API. Permite además desarrollar una programación basada en [BDD](https://en.wikipedia.org/wiki/Behavior-driven_development).

[PHPUnit](https://phpunit.de/) que tiene una amplia y depurada [documentacion](https://phpunit.readthedocs.io/es/latest/). Es uno de los principales marcos de test de php y está muy extendido, de tal manera, que aparte de la documentación, existen muchos foros donde se preguntan y se responden preguntas relacionadas con PHPUnit.

[PHPSpec](http://www.phpspec.net/en/stable/) solo permite test unitarios pero tiene una gran potencia y además tiene funciones que nos permiten programar enfocados a BDD y TDD. Tiene dos funcionalidades principales, **describe** and **run**. Con run podremos ejecutar los test, mientras que con describe, PHPSpec se encargará de darnos un boceto de la clase, función o atributo que necesitemos de cara a pasar nuestra etapa roja en el ciclo Red-Green-Refactor. 

Finalmente me he decantado por usar PHPUnit ya que posee bastante documentación y está muy extendido. Además, es probable que en un futuro se realicen también test de Behat, ya que me parecen bastante intuitivos y claros, aunque no para los test unitarios, donde considero PHPUnit superior.

## Correcta relación entre avance de código (incluyendo los tests) e HUs

## Tests significativos y/o avance del proyecto en sí más allá de lo básico, incluyendo sugerencias hechas en las correcciones y evaluaciones de hitos anteriores




