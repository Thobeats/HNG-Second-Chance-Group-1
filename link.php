<?php



 if ($link = mysqli_connect("localhost", "root", "", "intern_grader")) {
     //echo "Connection to database succesful";
 } else {
     echo "Connection failed";
 }

 
 if ($conn = mysqli_connect("localhost", "root", "", "internship_manager")) {
   // echo "Connection to database succesful";
} else {
    echo "Connection failed";
}

?>