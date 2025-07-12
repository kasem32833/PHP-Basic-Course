<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP basic course</title>
</head>
<body style="font-size:x-large; margin:100px;  ">
    <?php
        
        echo 'Hi future developer</br>';

        $my_name = "Abul Kasem";

        echo "$my_name </br>";



        // Best Practices

        // Commenting

            //single line comment
            /*
                Multiple line comment
             */


        // Snake Case....... $my_name(variable/ function)
        // Camel Case........$myName(for method)
        // Title Case........$MyName (also called pascle case) for(class)


        ### need to reed fig.com for standard code / best practices

        $my_name = "Sagar</br>";

        echo $my_name; // variable valu could be changed in run time

        // contant declaration and print

        define("PI", 3.1416);

        echo PI;

        // expression and statement

        /**
         * Data Types
            *scaller data types
                *Integer
                *float/Double
                *boolean
                *string
            *Compound data types
                *Array
                *Object
            *Special Types
                *Null
                *Resource
         */

        $age = 25; //integer

        $price = 30.50; //float/Double

        $is_admin = false; //boolean like a question

        $is_user = true; 


        // compound Data Types

        $fruits = ["Mango", "Banana", 27];

        echo "$fruits[1]</br>"; //use index for print any value;

        //$user = new User(); // here $user is an object and User is a class 


        // special types
        $variable = NULL;

        // resource types
        //$file = fopen('test.txt', 'r');


        //operators

            //Arithmatic Operator

            $a = 10;
            $b = 10;
            $addition =  $a + $b;
            $subtraction =  $a - $b;
            $multiplication =  $a * $b;
            $divition =  $a / $b;
            $modulus =  $a % $b;
            $exponenciation = $a ** $b;



            echo "$addition</br>";
            echo "$subtraction</br>";
            echo "$multiplication</br>";
            echo "$divition</br>";
            echo "$modulus</br>";
            echo "$exponenciation</br>";







    ?>
</body>
</html>

