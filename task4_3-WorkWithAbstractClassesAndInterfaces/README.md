Task 4.3 - Working with abstract classes and interfaces

---------------------------------------------------------------

ABSTRACT CLASS

Se desea crear una clase abstracta Animal que nos permita extenderla a otras clases.


Dicha clase animal deberá tener dos propiedades: nombre y edad que se cubrirán en el constructor.

Tendrá un método llamado describir() que devolverá un string con el nombre y la edad del animal

Tendrá un método saludar() (sin implementar -> tendrá que ser implementado por las subclases)

Crear una subclase de Animal llamada Perro que implemente la función saludar()

Implementar la función describir() que devuelva  un string que concatene al string original del método describir() la cadena , " y además es un perro".

Hacer lo mismo con una subclase llamada Gato.

---------------------------------------------------------------


INTERFACE


Sabiendo que un coche tiene las siguientes funcionalidades:

arrancar, apagar, girarDerecha, girarIzquierda

Sabiendo que un avión tiene las siguientes funcionalidades:

despegar, aterrizar, ascender y descender

Definir una clase llamada cocheAvion que tenga que implementar las interfaces anteriores.

---------------------------------------------------------------

ABSTRACT CLASS


Se desea crear una clase abstracta llamada Mueble con las siguientes propiedades:

protected: altura, ancho, largo

método public  ajustarDatos(ancho,alto,largo) que ajuste las propiedades anteriores.

método public y abstracto obtenerPrecio -> que implementarán las subclases

Crear una subclase Estantería que añada a la clase mueble lo siguiente:

private: precio

método public ajustarDatos que además permita introducir el precio

Implemente la función obtenerPrecio: devolverá el precio

¿Si Mueble en lugar de ser una clase abstracta fuera una clase normal podría usar private en las propiedades de altura, ancho y largo? ¿Qué ocurriría al heredar en la subclase Estantería?

En una clase abstracta si los métodos son declarados como abstract se puede poner visibilidad private? Razona la respuesta.

¿Se pueden instanciar objetos de una clase abstracta?

Escribe 3 características-diferencias para clases Abstractas y para Interfaces