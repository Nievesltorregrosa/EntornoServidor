<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inserción de código en páginas web</title>
    </head>
    <body>
        <?php
        echo "<h2>1.- Crea un archivo PHP para ejecutar en nuestro servidor XAMPP que muestre
        por pantalla lo siguiente: <h2>";
        echo "<h3>a. Variable de tipo String con valor “Hola” concatenada a un espacio y
        concatenada a una variable de tipo String con valor “Mundo”. Guarda la concatenación en una nueva variable. <h3>";
            // Declaramos las variables tipo String
            $hola = "Hola";
            $mundo = "Mundo";
            // Concatenamos las variables
            $Saludo = $hola . " " . $mundo;
            // Mostramos el resultado
            echo "<h4>$Saludo<h4>";

        echo "<h3>b. Variable de tipo boolean con valor “true”.<h3>";
            // Declaramos la variable
            $Activo = true;
            // Mostramos el resultado
            echo "<h4>$Activo<h4>";
            
        echo "<h3>c. Variable de tipo float con valor “3,14”<h3>";
            // Declaramos la variable
            $pi = 3.14;
            // Mostramos el resultado
            echo "$pi";
            
        echo "<h3>d. Variable de tipo array que contenga los valores “1”, “2” y “3” y
        tengan como clave valor1, valor2 y valor3 respectivamente.<h3>";
            // Declaramos la variable
            $numeros = array("valor1" => "1", "valor2" => "2", "valor3" => "3");
            // Mostramos el contenido del array
            print_r($numeros);

        echo "<h2>2.-Cambia la variable de tipo boolean a valor “false”. Muestra el resultado
        obtenido al ejecutarlo con el servidor. ¿Qué ocurre y por qué?<h2>";
            // Declaramos la variable
            $BooleanF = false;
            // Mostramos el resultado
            echo $BooleanF;

            echo "<h3>No se muestra por pantalla el resultado por que es una variable vacia<h3>";
        
        echo "<h2>3.-Elimina los espacios de la variable concatenada utilizando la función
        correspondiente<h2>";
            // Declaramos la variable
            $HolaMundo = "Hola Mundo";
            // Eliminamos los espacios
            $frase = str_replace(" ", "", $HolaMundo);
            // Mostramos el resultado
            echo "<h4>$frase<h4>";

        echo "<h2>4.-Muestra por pantalla el siguiente mensaje:
        El operador “+” sirve para sumar el valor de variables. Con la “/”podemos
        dividir valores entre variables. El símbolo del dólar '$' indica que estamos
        utilizando variables pero no lo usaremos en las constantes o globales. <h2>";   
            // Mostramos el mensaje
            echo "<h4>El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos\n dividir valores entre variables. 
            El símbolo del dólar \$ indica que estamos\n utilizando variables pero no lo usaremos en las constantes o globales.\n<h4>";

        echo "<h2>5.-Almacena la cadena anterior en una variable y usa la función
        correspondiente para indicar la longitud de la cadena.</h2>";
            // Declaramos la variable
            $cadena = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos\ndividir valores entre variables. 
            El símbolo del dólar \$ indica que estamos\n utilizando variables pero no lo usaremos en las constantes o globales.\n";
            // Obtenemos la longitud de la cadena
            $longitud = strlen($cadena);
            // Mostramos la longitud de la cadena
            echo "La longitud de la cadena es de $longitud caracteres.";

        echo "<h2>6.-Utiliza la función correspondiente para eliminar las vocales en la frase
        “Hello World”.</h2>";
            // Declaramos la variable
            $frase = "Hello World";
            //Arreglo de vocales en minúsculas y mayúsculas
            $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];  
            // Eliminamos las vocales
            $fraseSinVocales = str_replace($vocales, "", $frase);
            // Mostramos la frase sin vocales
            echo $fraseSinVocales;

        echo "<h2>7.-Crea una variable sin contenido y usa la función correspondiente para
        comprobar si está vacía. ¿Qué ocurre y por qué?</h2>";
        // Declaramos la variable
            $variablevacia = "";
            echo empty($variablevacia);
            echo "<h4>La variable está vacía por lo que saldria un 1<h4>";
            
        echo "<h2>8.-Convierte la variable que contiene la frase “Hello World” y conviértela en
        entero. ¿Qué ocurre y por qué?</h2>";
            // Declaramos la variable
            $frase = "Hello World";
            // Convertimos la variable a entero
            $entero = (int)$frase;
            // Mostramos el valor del entero
            echo $entero;
            echo "<h4>La variable contendrá el valor 0, ya que PHP no puede encontrar un número al principio de la cadena y, 
            por lo tanto, interpreta la cadena como un número entero igual a 0. <h4>";
            
        echo "<h2>9.-Crea programas que calcule lo siguiente:</h2>";
        echo "<h3>a.La raíz cuadrada de 144</h3>";
            // Declaramos la variable
            $numero = 144;
            // Calculamos la raíz cuadrada
            $raiz = sqrt($numero);
            // Mostramos el resultado
            echo "La raíz cuadrada de $numero es $raiz.";

        echo "<h3>b.La potencia 2 elevado a 8</h3>";
            // Declaramos la variable
            $numero = 2;
            // Calculamos la potencia
            $potencia = pow($numero, 8);
            // Mostramos el resultado
            echo "2 elevado a 8 es $potencia.";

        echo "<h3>c.El resto de la división de 100/6</h3>";
            // Declaramos la variable
            $dividendo = 100;
            $divisor = 6;
            // Calculamos el resto
            $resto = $dividendo % $divisor;
            // Mostramos el resultado
            echo "El resto de la división de $dividendo/$divisor es $resto.";

        echo "<h3>d.El máximo común divisor de 3 y 6</h3>";
            
            // Declaramos los números
            $numero1 = 3;
            $numero2 = 6;
            // Calculamos el Maximo Comun Divisor
            function mcd ($numero1, $numero2){
                if ($numero2 == 0) {
                    return $numero1;
                } else {
                    return mcd($numero2, $numero1 % $numero2);
                }
            }
            // Mostramos el resultado
            echo "El máximo común divisor de $numero1 y $numero2 es: " .mcd($numero1 , $numero2).".";
        ?>
    </body>
</html>