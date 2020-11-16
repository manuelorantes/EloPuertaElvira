## Arquitectura y herramientas seleccionadas

# Arquitectura

Se realizará una arquitectura de microservicios, ya que esto nos ofrece que si cae un servicio los otros sigan en pie, y no se produzca un colapso total del sistema.

1. En primer lugar, habrá un microservicio que solo estará encargado de obtener los datos cuando estos se actualicen en la página de la [FADA](http://www.gefe.net/mygefe2/ZPEligeDescargaElo.asp)

2. El segundo microservicio estará encargado de enviar los datos del último cambio de ELO. Enviará el nombre de los jugadores, el nuevo ELO que posean y el cambio frente al mes pasado.

3. El tercero obtendrá el nombre de un jugador y devolverá la evolución de ELO de este jugador a lo largo del tiempo.

4. Se encargará solamente de ver si nuevos jugadores del club han obtenido ELO. Si es así, lo añadirá a la base de datos actual.

5. Ante una petición de nuevos jugadores con ELO, devolverá los jugadores que obtenieron ELO por primera vez.

# Herramientas

1. En primer lugar usaremos [Symfony](https://symfony.com/) que es un framework muy actual de PHP que se sigue mejorando día a día. Tiene un soporte muy amplio y una documentación extensa y precisa.

2. Para el desarrollo de test se usarán tanto [PHPUnit](https://phpunit.de/) que tiene una amplia y depurada [documentacion](https://phpunit.readthedocs.io/es/latest/) (incluso en español) y [PHPSpec](http://www.phpspec.net/en/stable/). Se usarán ambos ya que PHPUnit permite las tres clases de test y PHPSpec, aunque solo permite test unitarios, tiene una gran potencia y además tiene funciones que nos permiten programar enfocados a BDD y TDD.

3. Se usará ademas docker y mysql como base de datos. Tienen ambas herramientas una implementación muy buena con symfony, lo que permite su uso muy cómodo, y mysql será suficiente para la base de datos que queremos, que no será demasiado extensa por las características del club.


