<?php
include '../user_model/db.php';
session_start();

if (!isset($_SESSION['username'])) {

    echo "<p>Please Login First</p>";
    $username="Unknown User";
}
else {
    $username = $_SESSION['username'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Board</title>
    <link rel="stylesheet" href="../user_css/homepage.css">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
          $("#flip").click(function(){
            $("#panel").slideDown("slow"); 
            
            $("#flip").click(function(){
                $("#panel").slideUp("slow");
            });
          });
        });
        </script>
</head>

<body>

    <div class="star">
        <h1 align="center" class="glow">Star Cineplex</h1>
        <hr>
    </div>

    <div id="flip">
        <p>Click me down↓</p>
    </div>

    <div id="panel">
        <li><a href="user_login.php">Login</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="../user_controller/logout.php">Logout</a></li>
        </div>
        

    <div class="navbar">
        <ul>
            <li><a href="user_login.php">Login</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="../user_controller/logout.php">Logout</a></li>
        </ul>
        <button class="hist" onclick="openHist()"><img src="book.png" width="40px" height="40px" alt=""></button>
        <button class="vanue" onclick="openPopup()">Please check the perefered vanue</button>
    </div>

   

    <div id="slider">
        <figure>
            <img class="image" src="cine 2.jpg" alt>
            <img class="image" src="cine3.jpg" alt>
            <img class="image" src="cine6.jpg" alt>
            <img class="image" src="cine1.jpg" alt>
            <img class="image" src="cine6.jpg" alt>
        </figure>
    </div>
    <br>
    <div class="notice">
        <button class="butt"> <a href="https://www.instagram.com/cineplexmovies/?hl=en">Instagram</a> </button>
        <button class="butt"><a href="https://www.facebook.com/MYCINEPLEX/">Facebook</a></button>
        <button class="butt"><a href="https://www.youtube.com/watch?v=0Nr4ckuncgA">Youtube</a></button>
    </div>
    <div class="histPopup" id="histPopup">
        <h1 align="center">Booked History</h1>
        <hr>
        <table align="center" border="1px" cellspacing="0px" cellpadding="5px">
            <tr>
                <th>Movie Name</th>
                <th>Show Date</th>  
            </tr>
             
        </table>
        
        <button class="histbutt" onclick="closeHist()">Checked Booking</button>
    </div>

    <br>
    <div class="now">
        <marquee behavior="" direction="">
            <h1 align="center">Now Showing Now Showing
                Now Showing Now Showing Now Showing Now Showing

            </h1>
        </marquee>
    </div>
    <div class="panel">
        <div class="card">
            <div class="card-image"></div>
            <div class="card-text">
                <h4 id="hawa">Movie : Hawa</h4>
                <h4>Release : 22-7-2-2022</h4>
                <h4>Genre : Drama</h4>
                <button class="butt2" id="b1" onclick="openBook();hawa();">Book</button>
            </div>
        </div>

        <div class="card">
            <div class="card-image2"></div>
            <div class="card-text">
                <h4 id="poran">Movie : Poran</h4>
                <h4>Release : 3-7-2-2022</h4>
                <h4>Genre : Drama</h4>
                <button class="butt2" id="b2" onclick="openBook();poran();">Book</button>
            </div>
        </div>

        <div class="card">
            <div class="card-image3"></div>
            <div class="card-text">
                <h4 id="bullet train">Movie : Bullet Train</h4>
                <h4>Release : 1-6-2-2022</h4>
                <h4>Genre : Thriller</h4>
                <button class="butt2" id="b3" onclick="openBook();bullet();">Book</button>
            </div>
        </div>

        <div class="card">
            <div class="card-image4"></div>
            <div class="card-text">
                <h4 id="Love and Thunder">Movie : Love and thunder</h4>
                <h4>Release : 2-6-2-2022</h4>
                <h4>Genre : Action</h4>
                <button class="butt2" id="b4" onclick="openBook();love();">Book</button>
            </div>
        </div>
    </div>

    <br><br><br><br>
    <div class="now2">
        <h1 align="center">Comming Soon</h1>
    </div>

    <div class="panel">
        <div class="card">
            <div class="card-image10"></div>
            <div class="card-text">
                <h4>Movie : Black PantherII</h4>
                <h4>Release : November 2022</h4>
                <h4>Genre : Action</h4>
                <button class="butt2"><a
                        href="https://en.wikipedia.org/wiki/Black_Panther:_Wakanda_Forever">Detailes</a></button>
            </div>
        </div>

        <div class="card">
            <div class="card-image11"></div>
            <div class="card-text">
                <h4>Movie : Orphan First Kill </h4>
                <h4>Premere : December 2022</h4>
                <h4>Genre : Thriller</h4>
                <button class="butt2"><a href="https://en.wikipedia.org/wiki/Orphan:_First_Kill">Detailes</a></button>
            </div>
        </div>

        <div class="card">
            <div class="card-image12"></div>
            <div class="card-text">
                <h4 class="">Movie : Avatar 2</h4>
                <h4>Premere : December 2022</h4>
                <h4>Genre : Advanture</h4>
                <button class="butt2"><a
                        href="https://en.wikipedia.org/wiki/Avatar:_The_Way_of_Water">Detailes</a></button>
            </div>
        </div>

        <div class="card">
            <div class="card-image13"></div>
            <div class="card-text">
                <h4>Movie : Three thousads years of longing</h4>
                <h4>Premere : December 2022</h4>
                <h4>Genre : Action</h4>
                <button class="butt2"><a
                        href="https://en.wikipedia.org/wiki/Three_Thousand_Years_of_Longing">Detailes</a></button>
            </div>
        </div>
    </div>


    <br>
    <div class="panel2">
        <div class="special">
            <h1 align="center">Special Offers</h1>
            <img src="new offer.png">
        </div>
        <div class="vote">
            <h3 align="center">Customer Pole</h3>
            <p align="center">How do you feel about Cineplex?</p>
            <br>
           <input type="text" name="pole">
            <br>
            <br><br><br>
            <div class="vote2">
                <h3 align="center">Notice</h3>
                <marquee behavior="" direction="">
                    <p>Thursday is weekly
                        holyday. Please bring the ticket before the arrival. Please
                        check the schedule before the arrival </p>
                </marquee>
            </div>

            <br><br><br>
            <div class="vote2">
                <h3 align="center">Student Offer</h3>
                <p align="center"><a href="https://www.promocodebd.com/offer/star-cineplex-movie-ticket-free/"
                        align="center">Click here to checkout student offers</a></p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <hr>
    <div class="footer">
        <div class="footer-text">
            <u><b>
                    <p>Asif tech limited</p>
                </b></u>
            <p>level 1 mirpur 13</p>
            <p>Dhaka 1216</p>
            <p>Bangladesh</p>
        </div>
        <div class="footer-text">
            <u><b>
                    <p>Contact US</p>
                </b></u>
            <p>(+88) 09617660660</p>
            <p>01755665544</p>
            <u><b>
                    <p>Contact US</p>
                </b></u>
            <p>eramasif16@gmail.com</p>
        </div>

        <div class="footer-text">
            <u><b>
                    <p>More at cineplex</p>
                </b></u>
            <p>Student reward program</p>
            <p>New year offer</p>
        </div>

        <div class="footer-text">
            <u><b>
                    <p>Copyright</p>
                </b></u>
            <p>Copyright @ Asif 2050</p>
            <p>Privacy and policy</p>
        </div>
  

    </div>
    <div class="popup" id="popup">
        <a href="https://www.google.com/maps/dir/23.8010006,90.3814755/Star+
        Cineplex,+13%2F3+Ka,+Level+8,
        +Bashundhara+City,+Panthapath,
        +Dhaka+1205/@23.7753411,90.373
        8195,14z/data=!3m1!4b1!4m10!4
        m9!1m1!4e1!1m5!1m1!1s0x3755b8a3
        303a6fbf:0xbc442f814508a7f0!2m2
        !1d90.3906021!2d23.751255!3e0"><h2 align="center">Bashundhara Shopping Mall, Panthapath
            <p>Snow motion limited level 8, Bashundhara city 13/3 K, Panthapath, Dhaka</p>
        </h2></a>
    
        <a href="https://www.google.com/maps/dir//Star+Cineplex+-+Shimanto+Shambhar,+P9PG%2BXW2,+Road+No.+2,+Dhaka+1205/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x3755b8ca5fc2992f:0x29c7e144c6374781!3e0?sa=X&ved=2ahUKEwjWmbr-q8T5AhVl73MBHTN_B98Q-A96BAgOEA4"> <h2 align="center">Simanto Shambhar, Dhanmmondi 2, Dhaka
            <p>Shimanto Shambhar Road no 2, Dhanmondi Dhaka</p>
        </h2></a>
   
        <a href="https://www.google.com/maps/dir//Star+Cineplex+-+SKS+Tower,+Q9HW%2B8VP,+Dhaka+1205/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x3755c78aec2876a3:0xd88f0f59fd5f8077!3e0?sa=X&ved=2ahUKEwjnlc_Hq8T5AhXCxHMBHe0uCX0Q-A96BAgREAw"> <h2 align="center">Star Cineplex, SKS tower, Mohakhali
            <p>SKS tower, Mohakhali, Dhaka 1205, Bangladesh</p>
        </h2></a>
   
        <a href="https://www.google.com/maps/dir//Sony+Square,+R924%2B55H,+Sony+Square,+Zoo+Road,+Dhaka+1216/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x3755c13f21695aa3:0x6159ed68bed83703!3e0?sa=X&ved=2ahUKEwimkITbq8T5AhWQlNgFHaroDH0Q-A96BAgQEA4"><h2 align="center">Star Cineplex, Sony square, Mirpur
            <p>Level 4, Plot 1, Road-2, Block-D, Section-2, Mirpur, Dhaka 1216, Bangladesh</p>
        </h2></a>
    
        <a href="https://www.google.com/maps/dir//Star+Cineplex+-+Bangabandhu+Military+Museum,+Q97M%2B8VP,+Dhaka+1215/data=!4m7!4m6!1m1!4e2!1m2!1m1!1s0x3755c758c36b3735:0xefd1575e361bb7e3!3e0?sa=X&ved=2ahUKEwjTpd7nq8T5AhX74XMBHfgECd4Q-A96BAgREA4"> <h2 align="center">Star Cineplex, Bangabandhu Military Meuseam
            <p>Bangabanshu military meuseam, Bijoy Shorony, Dhaka 1215</p>
        </h2></a>
   
    <button class="prefer" onclick="closePopup()" >Found Prefered Location</button>
    </div>

    <div class="bookPopup" id="bookPopup">
        <input type="text" id="mname" name="mname" placeholder="Movie Name"><br>
        <input type="date" id="mdate" name="date"><br>
        <input type="text" id="email" name="email" value="<?php echo $username ?>" placeholder="Confirm Email To Book"><br>

        <p align="center">Select the vanue</p>

        <select name="choose_vanue" id="mvanue">
            <option value="Bashundhara">Bashundhara</option>
            <option value="Simanto Shambhar">Simanto Shambhar</option>
            <option value="SKS Tower">SKS Tower</option>
            <option value="Sony Square">Sony Square</option>
            <option value="Bangabandhu Military Museum">Bangabandhu Military Museum</option>
        </select>
<br><br>
        <button class="prefer" onclick="closeBook()">Book Ticket</button>
        <button class="prefer" id="cancel" onclick="closeBook()">Cancel</button>

    </div>

</body>
<script src="../user_js/homepage.js">

</script>
</html>