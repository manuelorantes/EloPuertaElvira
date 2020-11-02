# ELO PuertaElvira


## Descripción del proyecto

El ELO en contextos de ajedrez es un ranking de puntos que se otorga a los jugadores de ajedrez según sus partidas oficiales. Hay tres clases de ELO, FADA (andaluz), FEDA (español) y FIDE (internacional). 

Por otro lado, soy actualmente el presidente y fundador del [Club Ajedrez Puerta Elvira](http://clubajedrezpuertaelvira.blogspot.com/), uno de los dos únicos club de ajedrez de la ciudad de Granada, y actualmente, el único de la ciudad de Granada que imparte clase a niños. 

El objetivo de este proyecto es proporcionar una forma fácil para poder procesar estos datos, ya que actualmente la forma de consultarlo es accediendo a la página de la [FADA](http://www.fadajedrez.com/) (federación andaluza de ajedrez) y pinchando en [busca tu elo Fada](http://www.fadajedrez.com/index.php/gestion-elo/busca-tu-elo-fada). Inicialmente este proceso se hacía con ficheros excel, y se pasó a este sistema, aunque sigue siendo un poco obsoleto y la gente que no es tan cercana al ajedrez (los padres de los nuevos alumnos) suelen tener problemas para estar informados al respecto. 

Por todo esto, se quiere crear una herramienta de ayuda en forma de API que devuelva un listado de las siguientes cosas, para poder facilitar al cm del club ajedrez puerta elvira esta información con la cual pueda hacer distintas publicaciones. Las cosas que devolverá la API son:

1. **Cambio de ELO**: Cambio en el ranking mensual de cada uno de los jugadores del club, tanto para ganar o perder Elo.
	
2. **Historial de un jugador**: Proporciona un historial de ELO de un jugador especifico solicitado en la petición.
	
3. **Nuevos jugadores**: Informa de los nuevos jugadores que han conseguido ELO en el último periodo.

## Arquitectura

Se realizará una arquitectura de microservicios, ya que esto nos ofrece que si cae un servicio los otros sigan en pie, y no se produzca un colapso total del sistema.

1. En primer lugar, habrá un microservicio que solo estará encargado de obtener los datos cuando estos se actualicen en la página de la [FADA](http://www.gefe.net/mygefe2/ZPEligeDescargaElo.asp)

2. El segundo microservicio estará encargado de enviar los datos del último cambio de ELO. Enviará el nombre de los jugadores, el nuevo ELO que posean y el cambio frente al mes pasado.

3. El tercero obtendrá el nombre de un jugador y devolverá la evolución de ELO de este jugador a lo largo del tiempo.

4. Se encargará solamente de ver si nuevos jugadores del club han obtenido ELO. Si es así, lo añadirá a la base de datos actual.

5. Ante una petición de nuevos jugadores con ELO, devolverá los jugadores que obtenieron ELO por primera vez.

## Herramientas

1. En primer lugar usaremos [Symfony](https://symfony.com/) que es un framework muy actual de PHP que se sigue mejorando día a día. Tiene un soporte muy amplio y una documentación extensa y precisa.

2. Para el desarrollo de test se usarán tanto [PHPUnit](https://phpunit.de/) que tiene una amplia y depurada [documentacion](https://phpunit.readthedocs.io/es/latest/) (incluso en español) y [PHPSpec](http://www.phpspec.net/en/stable/). Se usarán ambos ya que PHPUnit permite las tres clases de test y PHPSpec, aunque solo permite test unitarios, tiene una gran potencia y además tiene funciones que nos permiten programar enfocados a BDD y TDD.



## Planificación del proyecto

Además de la planificación aquí estipulada, se usará [trello](https://trello.com/b/dNqy38bk/elopuertaelvira) para ir planificando cada sprint en específico. Ahí podremos seguir paso a paso como va el desarrollo de cada proceso involucrado.

En cada uno de los objetivos, vemos lashistorias de usuario asociadas directamente a ese objetivo.

### Primer objetivo [(Milestone 1)](https://github.com/manuelorantes/EloPuertaElvira/milestone/3)

Creación de las entidades necesarias para manejar toda la información.

En este objetivo no hay historias de usuario directas, pero en muchas de ellas es necesario este primer objetivo. Para ver algunas de las cosas que se realizarán en este objetivo, vemos un par de issues:

- [Crear entidad profesor](https://github.com/manuelorantes/EloPuertaElvira/issues/17)
- [Crear entidad ELO](https://github.com/manuelorantes/EloPuertaElvira/issues/32)


### Segundo objetivo [(Milestone 2)](https://github.com/manuelorantes/EloPuertaElvira/milestone/5)

Se crearán funcionalidades de la base de datos, añadir nuevos jugadores, poder consultar el ELO actual de todos ellos, poder consultar el cambio de ELO, eliminar jugadores que ya no pertenecen al club...

	- [[HU2] Añadir nuevo jugador al club](https://github.com/manuelorantes/EloPuertaElvira/issues/7)
	- [[HU3] Quitar jugador del club](https://github.com/manuelorantes/EloPuertaElvira/issues/8)
	- [[HU7] Añadir un alumno a una clase](https://github.com/manuelorantes/EloPuertaElvira/issues/12)
	- [[HU8] Eliminar un alumno de una clase](https://github.com/manuelorantes/EloPuertaElvira/issues/13)

  
### Tercer objetivo [(Milestone 3)](https://github.com/manuelorantes/EloPuertaElvira/milestone/4)

Estará orientada a la comunicación del sistema entre sí como a poder comunicarse con el solicitante, recibiendo y transmitiendo información.

	- [[HU1] Obtener el último listado de ELO](https://github.com/manuelorantes/EloPuertaElvira/issues/6)
	- [[HU4] Obtener jugadores con ELO por primera vez](https://github.com/manuelorantes/EloPuertaElvira/issues/9)
	- [[HU5] Obtener jugadores con ELO por primera vez](https://github.com/manuelorantes/EloPuertaElvira/issues/10)
	- [[HU6] Obtener los últimos datos de ELO](https://github.com/manuelorantes/EloPuertaElvira/issues/11)
  

### Cuarto objetivo [(Milestone 4)](https://github.com/manuelorantes/EloPuertaElvira/milestone/6)

Se añadirán los roles, que serán el administrador, los profesores y los usuarios estandar. Los profesores podrán añadir y eliminar alumnos de sus clases, mientras que el administrador podrá hacer lo propio pero en el sistema. Los usuarios estandar solo podrán consultar datos.

Aunque no hayan HU en este objetivo, se añadirán en el futuro. Además, partes de otras HU están presentes en este objetivo, y correspondientemente vincualadas con la [milestone 4](https://github.com/manuelorantes/EloPuertaElvira/milestone/6).

### Quinto objetivo [(Milestone 5)](https://github.com/manuelorantes/EloPuertaElvira/milestone/7)

Será una alpha en la que se de acceso a ciertas persnas al sistema y se compruebe si todas las funcionalidades son correctas antes de finalizar el proyecto pasando a la versión 1.0. Además, se añadirá una ayuda y la información sobre la instalación de la herramienta.

	- [[HU9] Instalación](https://github.com/manuelorantes/EloPuertaElvira/issues/14)
	- [[HU10] Ayuda y opciones](https://github.com/manuelorantes/EloPuertaElvira/issues/15)
    
### Clases creadas


    
 
