<!doctype html>
<html lang="en">
    <head>
        <title>Array Question in php </title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <?php 
        // Find the largest number in an array by using a loop. select and checking 2d 
        
        //  Write a function that checks if a word is a palindrome (reads the same forwards and
        // backward).

        function paladrom($word_check){
            $word = strtolower($word_check);
            $reverse_word = strrev($word);
            // echo $reverse_word;

            if($word == $reverse_word ){
                echo " Yes it is palandrom ";
            }
            else{
                echo " Yes it is not palandrom ";
            }

        }
        $word = "RepAPer";
        paladrom($word);


        //  Write a function to calculate the factorial of a given number.
        function factorial($num){
            $number = $num;
            $factorial = 1;
            if($number > 0){
                for($i = 1; $i <= $num ; $i++){
                    $factorial *= $i;
                }
                echo $factorial;
            }
            else{
                echo "Invalid Number ";
            }
        }

        factorial(5);
        // echo factorial(5);

        //  Write a function that determines whether a given number is prime or not.

        //  Print numbers from 1 to 100, but for multiples of 3 print "Fizz", for multiples of 5, print
        // "Buzz" and for numbers that are multiples of both 3 and 5 print "FizzBuzz".

        // madam
        
        ?>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
