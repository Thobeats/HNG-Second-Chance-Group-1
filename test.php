<?php 

if ($link = mysqli_connect("localhost", "root", "", "internship_manager")) {
   // echo "Connection to database succesful";
} else {
    echo "Connection failed";
}



 
    
        $s = $_GET['usearch'];    
        $sql = "SELECT * FROM `interns` WHERE `slack_username` LIKE '%$s%'";
        $rs = mysqli_query($link, $sql);

       

        while ($row = mysqli_fetch_assoc($rs)) {

            $value = $row['slack_username'];

            echo " <div class='dropdown-menu' >

            <a class= 'dropdown-item'style='text-decoration: none; background: #fff; color: #000;'> $value </a>
            
            
            </div>
            ";     
        }
    






?>