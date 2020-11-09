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



### Primer objetivo [(Milestone 1)](https://github.com/manuelorantes/EloPuertaElvira/milestone/1)

Al final de este primer hito podremos manejar toda la información relacionada con el club. Será viable toda la gestión de todos los miembros del club. Podremos tener almacenados tanto los miembros, los profesores y los jugadores. Además, también estará la gestión de los grupos de las clases, en las que habrá tanto gente del club como otros alumnos que no necesariamente pertenecen al club.

Actualmente, no está la aplicación diseñada para gestionar el pago de las clases, pero es posible que en el futuro se añadan estas funcionalidades, y como consecuencia no se cierra la puerta a que haya nuevas historias de usuario.

A continuación podemos apreciar las historias de usuario asociadas a este hito:

- [Añadir un nuevo jugador al club](https://github.com/manuelorantes/EloPuertaElvira/issues/7)
- [Quitar un jugador del club](https://github.com/manuelorantes/EloPuertaElvira/issues/8)
- [Añadir un alumno a una clase](https://github.com/manuelorantes/EloPuertaElvira/issues/12)
- [Eliminar un alumno de una clase](https://github.com/manuelorantes/EloPuertaElvira/issues/13)


### Segundo objetivo [(Milestone 2)](https://github.com/manuelorantes/EloPuertaElvira/milestone/2)

El segundo hito está más enfocado a los temas relacionados con el ELO. Podremos actualizar la informacion del ELO, buscar la trayectoria de un jugador a lo largo del tiempo, ver que jugadores han conseguido ELO por primera vez en su vida y, por supuesto, obtener un listado del cambio del ELO de todos los jugadores, tanto de los que ganan como de los que pierden. Esto nos permitirá consultar la aplicación cada mes para facilitar al cm del club el hecho de hacer publicaciones mucho más personalizadas enfocadas a mejorar la imagen del club.

Algunas de las historias de usuario que se cumplirán con este hito son las siguientes:

- [Subir los datos de ELO](https://github.com/manuelorantes/EloPuertaElvira/issues/11)
- [Saber que jugadores han obtenido ELO por primera vez](https://github.com/manuelorantes/EloPuertaElvira/issues/10)
- [Obtener el histórico de ELO de un jugador](https://github.com/manuelorantes/EloPuertaElvira/issues/9)
- [Obtener el mejor jugador mensual](https://github.com/manuelorantes/EloPuertaElvira/issues/38)
- [Obtener los cambios de ELO del último mes](https://github.com/manuelorantes/EloPuertaElvira/issues/6)

## Clases creadas

Se ha avanzado en las siguientes historias de usuario:



Podemos ver además la estructura de las clases y carpetas en el archivo [cc.yaml](https://github.com/manuelorantes/EloPuertaElvira/blob/main/Proyecto_EloPuertaElvira/cc.yaml).
 
