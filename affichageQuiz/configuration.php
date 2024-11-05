<?php
   // define database related variables
 

   // try to connect to database
   $db =  new PDO('mysql:host=localhost;dbname=e-learning_project-main','root','');

   if(!$db){

      echo "Error in database connection";
   }

?>
