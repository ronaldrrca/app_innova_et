App piloto para el diagnóstico de innovación.
Extensionismo tecnológico
SENA
Mipyme se transforma

La App está construida con HTML5, CCS3, JavaScript, PHP, y la base de datos en Mysql, utilizando el modelo de arquitectura de software MVC. 
Una vez sea implantado el código en su hosting e importada la base de datos, es necesario cambiar el usuario y su contraseña para conectar la base de datos a la App, ajustando estos datos también en sus respectivas variables en el archivo “conexion.php”, en el directorio “modelo”.

Entregables:
•	Código fuente.
•	Archivo exportado de la base de datos. (Contiene el script constructor de la base de datos y los datos almacenados hasta el momento).

Responsive Design
El diseño es adaptable a móviles, tablets y computadoras desktop y laptop, mostrándose el menú dependiendo del dispositivo utilizado.

Librerías utilizadas
•	ChartsJS: Para la realización de gráficos con los datos obtenidos de la base de datos.
•	Html2pdf: Para descargar los reportes en formato PDF.

La App cuenta con las siguientes páginas:
•	Inicio
•	Diagnóstico inicial
•	Diagnóstico final
•	Login
•	Empresas 
•	Resultados diagnóstico inicial
•	Resultados diagnóstico final
•	Usuarios
•	Nuevo usuario
•	Cambio de contraseña

Inicio
Contiene un campo tipo numérico para el ingreso del nit, con tres posibles acciones al momento de presionar el botón “iniciar diagnóstico”. 
1.	La empresa con el nit ingresado no ha realizado el diagnóstico inicial, por lo tanto, se carga el formulario para este diagnóstico.
2.	La empresa con el nit ingresado ya realizó el diagnóstico inicial pero no el final, por lo tanto, se carga el formulario para este diagnóstico. 
3.	La empresa ya realizó tanto el diagnóstico inicial como el final, por lo tanto, una ventana emergente avisa que ya lo dos diagnósticos están realizados.

Diagnóstico Inicial
Cuando se carga esta página, se trae el nit ingresado en el inicio, sin posibilidad de cambiarlo. En este diagnóstico, el primer campo es tipo selección para que el empresario escoja el extensionista que tiene asignado para su proceso, esto permitirá que al momento de consultar los diagnósticos, el extensionista solo pueda ver sus empresas asignadas, A excepción del usuario con perfil de administrador, quien si puede ver todas las empresas y sus respectivos diagnósticos.
El formulario tiene campos opcionales y obligatorios, sí un campo obligatorio no es rellenado, no se permitirá el registro del diagnóstico y se avisará que campo debe ser atendido. En el punto 7, los campos que sean seleccionados con la opción “si” desplegarán otro campo tipo selección y uno tipo texto para descripción, que en este caso serían ambos obligatorios.
Sí todos los campos obligatorios son llenados correctamente, pero permitirá el registro del diagnóstico, con un aviso de “El diagnóstico se guardó con éxito”.

Diagnóstico final
Tiene el mismo formulario y condiciones del diagnóstico inicial, excepto que ya no aparece el campo para seleccionar el extensionista porque en este punto ya no hace falta. Por otro lado, cuando esta página se abre, se carga automáticamente la información básica que la empresa cargó en el diagnóstico inicial, como son, nombre de la empresa, nit, teléfono, correo electrónico, entre otras. Algunos de estos campos no son editables y otros que si pudieran cambiar entre los dos diagnósticos si son editables.  

Login
Contiene 2 campos, el primero para la cédula y es tipo numérico, y el segundo para la contraseña y es tipo password. Ambos campos son obligatorios, y al presionar el botón de “ingresar”, se realiza una comprobación que puede arrojar los siguientes resultados.
1.	“Cédula inválida”, el usuario no está registrado o el número de cédula que ingreso está errado.
2.	“Contraseña inválida”, el usuario está registrado pero la contraseña ingresada no es correcta.
3.	La cédula y la contraseña ingresada son correctas, por lo tanto, se carga la página que lista las empresas con sus diagnósticos.
En el caso de los extensionistas, se listarán solo sus empresas asociadas, para el caso de un usuario admin, se listarán todas las empresas.


Empresas
Aparecen las empresas listadas según el perfil del usuario logueado, para cada empresa hay 5 columnas, dos para el diagnóstico inicial y dos para el final, en la primera columna de cada diagnóstico aparecerá un ícono de documento, que permite ver el documento tal cual lo registro el empresario, pero sin posibilidades de edición. En la segunda columna de cada diagnóstico, aparecerá un ícono de gráficos que permitirá ver los resultados del respectivo diagnóstico. En la quinta columna, “<=>” aparecerá un ícono de dos flechas en direcciones opuestas (solo cuando la empresa cuente con ambos diagnósticos realizados), que permite acceder a la comparación entre los dos diagnósticos. 

Resultados diagnóstico inicial
Muestra las estadísticas del respectivo diagnóstico.

Resultados diagnóstico inicial
Muestra las estadísticas del respectivo diagnóstico.


Comparativa diagnósticos
Muestra las estadísticas de la comparación entre el diagnóstico inicial y el diagnóstico final.

Usuarios
Solo es posible acceder a está página a usuarios con perfil de administrador. Muestra una tabla con los nombres de los usuarios registrados, su respectivo perfil, un ícono para edición, otro para resetear el password y el último para eliminar el usuario. 
Las acciones de “Reset” y “Eliminar”, lanzan un mensaje de advertencia ante la acción para que el administrador la confirme o cancele. La acción de “Reset”, coloca como contraseña la cédula del usuario editado, esta acción está pensada para los casos en que los usuarios olviden la contraseña.

Nuevo usuario
Tiene 3 campos, nombre (tipo texto), cédula (tipo número) y perfil (tipo selección), todos son obligatorios.


Cambio de contraseña
Tiene 4 campos, cédula (tipo número), contraseña actual (tipo password), nueva contraseña (tipo password), y repita la nueva contraseña (tipo password). Si la contraseña actual es correcta y los campos de nueva contraseña y repita la nueva contraseña coindicen, el cambio será exitoso, de lo contrario, se generará un aviso indicando el error.

Algunas consideraciones
La opción “descargar PDF” es funcional solo en las páginas de diagnóstico inicial, diagnóstico final y en la comparativa de los diagnósticos. La opción de cerrar sesión lleva al login, y el ícono del SENA, lleva al inicio, o a la lista de empresas y diagnósticos en el caso de usuarios logueados.

Consideraciones técnicas
El producto tiene una deuda técnica debido al corto tiempo que se tuvo para presentar resultados funcionales con las características solicitadas. Por tal motivo, las fases del ciclo de vida del desarrollo del software fueron cumplidas al mismo tiempo, y como resultado, el software cumple con los requerimientos funcionales, pero, para una implementación definitiva o escalamiento, se debe refactorizar el código. En palabras más claras, el sistema funciona pero puede y debe ser reescrito teniendo como base lo que ya existe, pero esta vez con los tiempos adecuados para poder aplicar buenas prácticas y garantizar la eficiencia y mantenibilidad del sistema.   



