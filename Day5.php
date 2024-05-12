<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <?php

    function ArrayValues(array $x)
    {
        echo "<pre> ";
        print_r($x);
        echo "</pre> ";
    }

    // Find the last element of an array  without giving a hard-coded index.
    $student = array("Hajra", "Wajiha", "Tabsum", "Sumbal", "Ahmad");

    $arraylastindex = count($student) - 1;

    ?>

    <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'>
        <p class=' badge text-bg-success fs-4 ' style='width: 50rem;'> Indexed Array 
        </p>
    </div>

    <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'>
        <p class=' badge text-bg-danger fs-4 ' style='width: 26rem;'> Q1: Last Element of Array </p>
        <p> Last Element in Array is:
            <b>
                <?php
                echo $student[$arraylastindex]
                ?>
            </b>
        </p>
    </div>

    <?php
    // 2. Check whether the first or the last index of an array has a specified value, let's say 5.

    $numbers = array(5, 6, 8, 9, 4, 5);
    // $lastindex = count($numbers) - 1;
    // $firstindex = $numbers[0];

    function specifiedValues(array $x){
        $y = $x;
        $lastindex = count($y) - 1;
         $firstindex = $y[0];
        if ($firstindex == $lastindex) {
            echo "Yes specified value";
        } 
        else {
            echo " has not specified value";
        }
    }

    ?>

    <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'>
    <p class=' badge text-bg-danger fs-4 ' style='width: 30rem;'> Q2: First and Last Element of Array </p>
    <p> first or the last index of an array has a specified value:
        <b>
            <?php
            specifiedValues($numbers);
           
            ?>
        </b>
    </p>
</div>

<?php
   

    // 3. Make an array to store the names of students and check whether that array has your own
    // name or not and also return the index of that value.

    function findandreturn(array $x, $name)
    {
        $nam = $name;
        $arrayfind = array_search($nam, $x, true);
        return $arrayfind;
    }
    // $name = "Tabsum";
    
    ?>

    <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'>
    <p class=' badge text-bg-danger fs-4 ' style='width: 30rem;'> Q3: Search and return the index  </p>
    <p> find and return the index of the element:
        <b>
            <?php
           echo findandreturn($student, "Tabsum");
           
           ?>
        </b>
    </p>
</div>

<?php
    
    // $arrayfind = array_search("Tabsum", $student, true);
    // if($arrayfind){
    //     echo "Tabasum is in array <br> <br>";
    // }
    // else{
    //     echo "Name not found ";
    // }

    // 4. Add the array element at the specified index.

   
    ?>

    <div class='d-flex justify-content-center align-items-center flex-column mt-4 col-12'>
    <p class=' badge text-bg-danger fs-4 ' style='width: 30rem;'> Q4: Indexed Array </p>
    <p> Add element at the specified index:
        <b><br> Original Array
            <?php
             ArrayValues($student);
             ?>
            <br> <span fs-5> After Adding at Specific index  </span>
             <?php
             array_splice($student, 3, 0, "Asma");
             ArrayValues($student);
             ?>   
        </b>
    </p>
</div>

<?php
    

    // 5. Delete the array element from the specified index.
    array_splice($student, 3, 1);

    ArrayValues($student);



    ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>