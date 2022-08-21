<?php
include '../user_model/db.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_REQUEST['book']))
    {
    $movie_name=$_POST['mname'];
    $movie_date=$_POST['mdate'];    
    $movie_email=$_POST['email'];
    $vanue=$_POST['mvanue'];
   
        
        if(empty($movie_name) || empty($movie_date) || empty($movie_email) || empty($vanue))
        {
            echo "<p>Please fill all the fields</p>";
        }
        else
        {
            $obj=new db();
            $conn=$obj->opencon();
            $obj->bookmovie($conn,'booking',$movie_name,$movie_date,$movie_email,$vanue);
            echo "<p>Booking Successful</p>";    
        }
       
}


}



?>
