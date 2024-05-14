<?php
declare(strict_types=1);

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
        <style>
      :root {
  --primary-color: #49b93f;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: "Arial", sans-serif;
  background: #000;
  color: #999;
}

ul {
  list-style: none;
}

h1,
h2,
h3,
h4 {
  color: #fff;
}

a {
  color: #fff;
  text-decoration: none;
}

p {
  margin: 0.5rem 0;
  font-weight: bold;
}

img {
  width: 100%;
}

/* Showcase Styling */

.showcase {
  width: 100%;
  padding: 2rem 0;
  /* height: 100vh; */
  position: relative;
  background: url("https://github.com/sjvarnum/acme-media-showcase/blob/master/img/showcase.jpg?raw=true")
    no-repeat center center/cover;
}

/* Showcase Overlay */

.showcase::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background: rgba(0, 0, 0, 0.6);
  box-shadow: inset 120px 100px 250px #000000, inset -120px -100px 250px #000000;
}



.showcase-content {
  position: relative;
  margin: auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-top: 2rem;
  z-index: 2;
}

.showcase-content h1 {
  font-weight: 700;
  font-size: 4rem;
  line-height: 1.1rem;
  margin: 0 0 2rem;
}

.showcase-content p {
  font-weight: 400;
  color: #fff;
  font-size: 1.8rem;
  text-transform: capitalize;
  /* line-height: 1.25rem; */
  /* margin: 2rem 0 2rem 0; */
}

.showcase-content .btn-xl {
  margin-top: 1rem;
}

/* Button Styling */

.btn {
  display: inline-block;
  /* background: var(--primary-color); */
  background-color: #a71175;
  color: #fff;
  padding: 0.4rem 1rem;
  font-size: 0.75rem;
  text-align: center;
  text-transform: uppercase;
  border: none;
  cursor: pointer;
  outline: none;
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.45);
  border-radius: 2px;
  /*   margin-top: 3rem; */
}

.btn:hover {
  opacity: 0.9;
}


.btn-xl {
  font-size: 1.3rem;
  font-weight: 550;
  padding: 0.8rem 1.4rem;
  border-radius: 7px;
  text-transform: uppercase;
  background-color: #800156;

}
.array{
    font-size: 2rem;
    font-weight: 400;
}

    </style>
    </head>

    <body>
        <div align="center" class="container p-4 mt-3">

            <header class="showcase">
  <div class="showcase-content">
    <h1>PHP CHALLENGES </h1>
    <a href="#" class="btn btn-xl">
        Problem # 2
    </a>
    <p> Max Value In Array </p>
  </div>
</header>


        <?php
        // Reverse Array 
        function print_array($array){
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        }

        $array = array(51,2,30,261,56,20);
        $size = count($array);

        ?>
        <p class="btn">
            BEFORE Reversing ARRAY
        </p>
        
        <?php
        print_array($array);

        function MaxValue($arra , $size){
            $array = $arra;
            $n = $size;
            if($n <= 2 ){
                if( $array[0]> $array[1]){
                    echo $array[0];
                }
                else{
                    echo $array[1];
                }
            }

            if($n > 2){
                for($i = 0; $i < $n; $i++ ){
                    if($array[$i]> $array[$i+1]){
                        echo $array[$i];
                    }
                    else{
                        echo $array[$i+1];
                    }
                }
            }
        }


        ?>
            <p class="btn">
                After Reversing ARRAY
            </p>
            
            <p class="array">

            
            <?php

        echo MaxValue($array, $size);

        
        ?>
        </p>
        </div>
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
