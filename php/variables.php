<?php
#LAS VARIABLES SIEMPRE TIENEN Q COMENZAR CON EL SIMBOLO DE DOLAR
#LAS VARIABLES SIEMPRE SE ESCRIBEN EN MINUSCULA
#NO PUEDEN LLEVAR ESPACIOS, PUNTOS Y NO PUEDEN EMPEZAR POR NUMEROS
#SE PUEDEN ALMACENAR CADENAS DE TEXTOS SIEMPRE ESCRITAS ENTRE COMILLAS DOBLES O SIMPLES
    
#STRING: CADENA DE TEXTO
$nombre = 'Jorge';

#INTEGER: NUMEROS ENTEROS
$numero = "4";
    
#DOUBLE: NUMEROS CON DECIMALES
$numero_decimal = '4.4';

#BOOLEAN: VERDADERO O FALSO (TRUE/FALSE)
$verdadero = false;

#EXISTEN TAMBIEN:
#ARRAY: ARREGLO
#OBJECT: OBJETO
#CLASS: CLASE
#NULL: CUANDO A UNA VARIABLE AUN NO SE LE HA ASIGNADO NINGUN VALOR

#LA DIFERENCIA ENTRE LAS COMILLAS SIMPLES Y LAS DOBLES SON:
#LAS COMILLAS DOBLES NOS PERMITEN TRAER VALORES DE ESTE TIPO:
#ES RECOMENDABLE USAR SIEMPRE USAR COMILLAS SIMPLES
#PARA TRAER EL TEXTO CON COMILLAS SIMPLES ES: echo 'hola, ' . $nombre;
echo "hola, $nombre";

#COMO HACEMOS PARA CONOCER EL TIPO DE DATO DE UNA VARIABLE:
echo gettype($nombre)







    
?>
