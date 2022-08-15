<?php include ("../user_controller/reg_validation.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../user_css/reg.css">
</head>
<body>
    <form action="" method="post">

        <div class="star">
            <h1 align="center" class="glow">User Registration</h1>
        </div>
        
        <br><br><br><br>
    

        <div class="panel">
            <legend align="center"><h2>Personal Information</h2></legend>
            <label for="f_name">First name : </label>
            <input type="text" name="f_name" placeholder="First name"><?php echo $invalid_fname; ?><br><br>
            <label for="l_name">Last name : </label>
            <input type="text" name="l_name" placeholder="Last name"><?php echo $invalid_lname; ?> <br><br>
            <label for="info">Gender : </label><br><br>
    
            <input type="radio" name="gender"><label for="male">Male</label>
            <input type="radio" name="gender"><label for="Female">Female</label>
            <input type="radio" name="gender"><label for="others">Others</label>
            <?php echo  $invalid_gender; ?>
            <br><br>
        
            <label for="dob">Date of birth : </label>
            <input type="date" name="dob">
            <?php echo $invalid_dob ?>
            <br><br>
    
    <hr>
    
            <legend align="center"><h2>Contact information</h2></legend>
            <label for="mobile">Mobile number : </label>
            <input type="text" name="mobile" placeholder="Contact number">
            <?php echo $invalid_mobile; ?>
            <br><br>
            <label for="email">Email : </label>
            <input type="email" name="email" placeholder="Email">
            <?php echo $invalid_email; ?>
            <br><br>
            <label for="address">Address : </label>
            <textarea name="address" rows="4" cols="40" placeholder="house no./road no./block no./section no./district/Bangladesh."></textarea>
            <?php echo $invalid_address; ?>
            <br><br>
        
    <br><br>
     <hr>
            <br><br>
            <label for="set_pass">Password : </label>
            <input type="password" name="set_pass" placeholder="Password">
            <?php echo $invalid_set_pass; ?>
            <br><br>
            <label for="confirm_pass">Confirm password : </label>
            <input type="password" name="confirm_pass" placeholder="Confirm password">
            <?php echo $invalid_con_pass; ?>
            <br><br>
           <button name="submit" value="register" class="butt1">
           <a href="">Register</a></button>
            <br><br>
       
        </div>
        
</form>
</body>
</html>