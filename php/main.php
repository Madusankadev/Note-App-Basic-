<?php

$con = new mysqli("localhost", "root", "SuV@gmv0", "notes", "3306");

$title = ($_POST["title"]);
$note = ($_POST["note"]);
$catogeryOpt = ($_POST["catogeryOpt"]);

if (empty($title)) {
   echo ("Please add Tittle");
} elseif (empty($catogeryOpt)) {
   echo ("PLease enter Catogery");
} elseif ($catogeryOpt == "0") {
   echo ("Select or add your catogery");
} else {
   $q = "INSERT INTO `note` (`title`, `noteTxt`, `catogery_idcatogery`) VALUES ('" . $title . "', '" . $note . "', '" . $catogeryOpt . "')";

   if ($con->query($q)) {
      echo ("Note Added !");
   } else {
      echo ("Something went to wrong! Please try again later..");
   }
}
