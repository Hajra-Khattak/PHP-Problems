<!doctype html>
<html lang="en">

<head>
    <title>Multi Dimentiaonal Array </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <?php

    // Find the same numbers from the following multidimensional array
    $amultiArr = [
        [
            [12, 32, 13, 34],
            [13, 12, 23, 41],
            [15, 23, 34, 45],
        ],
        [
            [122, 32, 133, 314],
            [123, 132, 23, 141],
            [155, 23, 334, 465],
        ],
        [
            [12, 342, 135, 234],
            [713, 712, 423, 431],
            [15, 23, 34, 45],
        ],
        [
            [12, 372, 913, 334],
            [13, 162, 243, 341],
            [175, 423, 34, 435],
        ],
    ];

    // echo $amultiArr[0][0][1];

    $count = 0;
    $array_length = count($amultiArr);
    for ($row = 0; $row < count($amultiArr); $row++) {
        // echo "first row" . $amultiArr[$row] ;
        $row_length = $amultiArr[$row];
        for ($col = 0; $col < count($amultiArr[$row]); $col++) {
            $col_length = $amultiArr[$row][$col];
            for ($colls = 0; $colls < count($amultiArr[$row][$col]); $colls++) {
                $value = $amultiArr[$row][$col][$colls];
                echo $value . "  &ensp;";

                $name = $amultiArr[$row][$col][$colls];
                $key = array_search($name, array_column($amultiArr, $value));
                if($key){
                    echo $key;
                }

                // $array_index = array_search($amultiArr[$row][$col][$colls], $amultiArr[$row][$col][$x]);
                // if ($amultiArr[$row][$col][$x] ==  $amultiArr[$row][$col][$colls]) {
                //     echo $amultiArr[$row][$col][$x] . "  &ensp;";
                // }

                // echo "<br>";

            }
            echo "<br>";
        }
        echo "<br>";
    }

    foreach ($amultiArr as $value) {
    }

    ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>