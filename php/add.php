<?php

// include "../index.php";

$conNew = new mysqli("localhost", "root", "SuV@gmv0", "notes", "3306");

$catogery = $_POST["catogery"];

if (empty($catogery)) {
    echo ("Invalid Input");
} else {

    $q = "INSERT INTO `catogery` (`catogery`) VALUES ('" . $catogery . "')";

    if ($conNew->query($q)) {
        echo ("New Catogery Addedd!");
    } else {
        echo ("Failed!");
    }
}

// $conNew = new mysqli("localhost", "root", "SuV@gmv0", "notes", "3306");
// $q = "SELECT * FROM `catogery`";

//                     $res = $conNew->query($q);

//                     $numberOfRows = mysqli_num_rows($res);

//                     for ($i =0; $i < $numberOfRows; $i++ ) {

//                         $row = $res->fetch_assoc();

//                         echo ("<option value='". $row['idcatogery']."'>". $row['catogery'] ."</option>");

//                         // echo ($row);
//                     }
