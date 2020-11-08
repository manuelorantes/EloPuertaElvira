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

Para el proyecto se ha decidido que se use una arquitectura de microservicios. Esto nos permite que, si un servicio se cae, puedan seguir los demás, de modo que no se realice una interrupción total de la aplicación. Además, podemos tratar distintos ámbitospor separado, y así poder aislarlos como es debido, desde la gestión de usuarios o la integración de grupos de ajedrez hasta los procedimientos relacionados con las consultas. 

Se han estado pensado en otro tipo de arquitecturas. Una arquitectura monolítica quedó descarta pronto, pero no fué así con una arquitectura de capas. Esta ofrecía a priori justo lo que necesitabamos: una capa de aplicación, una lógica en la que se realizaba todos los cáculos y otra última de acceso a los datos. Parecía la arquitectura ideal, pero tiene un gran problema de cara a la posible proyección de la aplicación: solo permite escalado dentro de cada una de las capas. Pero, ¿por qué esto puede llegar a ser un problema si nos encontramos en una aplicación destinada a un club pequeño? A priori, no parece que necesitemos mucho escalado, con pocas personas y pocas funcionalidades. La respuesta es, que si todo sale adelante y es un éxito, sería posible enfocar el proyecto no solo a un club, sino a toda la provincia de Granada, y quien sabe, a Andalucía. Esto traería una carga mucho más significativa, y seguramente necesitaríamos nuevas funcionalidades, y no podemos permitir que en el fututo aparezcan los cuellos de botella. Por este mismo motivo descartamos también la opción de arquitecturas microkernel.

Por último descartamos las arquitecturas dirigidas por eventos por su complejidad y problemas que saldrían a la hora de realizar los test.

## Planificación del proyecto



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
    
## Clases creadas

Se ha avanzado en las siguientes historias de usuario:

- [[HU2] Añadir nuevo jugador al club](https://github.com/manuelorantes/EloPuertaElvira/issues/7)
  + Se crea la clase [Player](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Player.php), que se usará para controlar todo lo referente a los jugadores.

- [[HU3] Quitar jugador del club](https://github.com/manuelorantes/EloPuertaElvira/issues/8)
  + Se crea la clase [Player](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Player.php), que se usará para controlar todo lo referente a los jugadores.

- [[HU7] Añadir un alumno a una clase](https://github.com/manuelorantes/EloPuertaElvira/issues/12)
  + Se crea la clase [Player](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Player.php), que se usará para controlar todo lo referente a los jugadores.
  + Se crea la clase [Teacher](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Teacher.php), que servirá para gestionar todo lo relacionado con los profesores. Podrá controlar sus grupos y tendremos información sobre sus horas, salario, etc...
  + Se crea la clase [Group](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Group.php), que servirá para gestionar las distintas clases que hay dentro del club. Un profesor puede manejar más de una clase.

- [[HU8] Eliminar un alumno de una clase](https://github.com/manuelorantes/EloPuertaElvira/issues/13)
  + Se crea la clase [Player](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Player.php), que se usará para controlar todo lo referente a los jugadores.
  + Se crea la clase [Group](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Group.php), que servirá para gestionar las distintas clases que hay dentro del club. Un profesor puede manejar más de una clase.
  + Se crea la clase [Teacher](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/src/Entity/Teacher.php), que servirá para gestionar todo lo relacionado con los profesores. Podrá controlar sus grupos y tendremos información sobre sus horas, salario, etc...

Podemos ver además la estructura de las clases y carpetas en el archivo [cc.yaml](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/cc.yaml).
 
