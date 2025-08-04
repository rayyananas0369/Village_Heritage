<?php
include 'connection.php';


if (isset($_POST['check'])) {
    $booking_id = create_unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $check_in =$_POST['check_in'];
    $check_in = filter_var($check_in,FILTER_SANITIZE_STRING);
    $check_out =$_POST['check_out'];
    $check_out = filter_var($check_out,FILTER_SANITIZE_STRING);
    $adult = $_POST['adult'];
    $adult = filter_var($adult, FILTER_SANITIZE_STRING);
    $child = $_POST['child'];
    $child = filter_var($child, FILTER_SANITIZE_STRING);
    $room = $_POST['room'];
    $room = filter_var($room, FILTER_SANITIZE_STRING);

    $total_room = 0;
$check_booking = $conn->prepare("SELECT * FROM `booking` WHERE check_in=?");
$check_booking->execute([$check_in]);

while ($fetch_booking = $check_booking->fetch(PDO::FETCH_ASSOC)) {
    $total_room += $fetch_booking['room'];
}
if ($total_room >=10) {
    $warning_msg[]='romms are not available';
}else{
   
$verify_booking = $conn->prepare("SELECT * FROM `booking` WHERE name = ? AND number=? AND check_in=? AND 
    check_out=? AND adult=? AND child=? AND room+? ");
$verify_booking->execute([$name,$number,$check_in,$check_out,$adult,$child,$room]);

if ($verify_booking->rowcount()>0) {
$warning_msg[]= 'room booked already';
}
else {
    $book_room = $conn->prepare("INSERT INTO  `booking` (name,number,check_in,check_out,adult,child,room,booking_id) 
    VALUES (?,?,?,?,?,?,?,?)");
    $book_room->execute([$name,$number,$check_in,$check_out,$adult,$child,$room,$booking_id]);
    $success_msg[] = 'room booked successfully';
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>village tourism</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="lightbox.css">
</head>
<body>
    <section class="sub-header">
    <nav>
        <a href="index.html"><img src="images/logo4.png"></a>
        <div class="nav-links" id="navlinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="home.html">ABOUT</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="booking.html">BOOKING</a></li>
                <li><a href="contact.html">CONTACTS</a></li>
                
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
   <h1>BOOKING</h1>
</section>
<!------ booking ------->

<section class="contin">
    <div class="contin-er">
<div class="scroll-bar">
    <h2 class="heading"><center>Packages</center> </h2><br>
<h2> Some special packages deals to suit all taste and pockets</h2>
<br>
<p> It is a one week packages for visiting our heritage
    when you have any intrest in to stay our heritage we
     will afford
     it to visit these places for 3 night 4days packages and 2days packages we are
    affording</p><br>
<h1><center><u> 2 day packages</u></center></h1><br>
<h2>Day 1: ALLEPPEY BACKWATERS-ALLEPPEY BEACH</h2><br>

    <h3>* st.Mary's Forance Church </h3>
       <h4>Duration to visit : 1Hour</h4>
       <br>
       <h3>* Alleppey Backwater Cruises</h3>
       <h4>Duration of visit:4 Hours/Half Day</h4>
    
       <br>
       <h3>*Alleppey Beach</h3>
       <h4>Duration of visit: 1 Hour</h4>
       <br>
       <h3>* Mullakkal Raja Rejeswari Temple</h3>
       <h4>Duration to visit : 1Hour</h4>
       <br>
       <h2>Overnight stay in our heritage</h2>

<br>

<h2>Day 2: Visiting Ambalapuzha Temple- Karumadikuttan- Kuttanad-
    Kuttanad special food
</h2><br><h3>* Visiting Ambalapuzha Temple</h3>
<h4>Duration to visit : 1Hour</h4>
<br>
<h3>* Visiting Karumadikuttan</h3>
<h4>Duration of visit:1 Hours</h4>

<br>
<h3>* Kuttanad special food</h3>
<h4>Duration of visit: 2 Hour</h4>
<br>
<br>
<center>
<table border="4">
    
    <tr>
<td>Hotel</td>
<td>3500</td>
</tr>
<tr>
    <td>Return transport</td>
    <td>2000</td>
</tr>
<tr>
    <td>Food</td>
    <td>2000</td>
</tr>
<tr>
<td>Total</td>
<td>7500</td>
</tr>

2 Nights/person

</table>
</center>
<br>
<br>

<h1><center><u>  3 Night/4day packages</u></center></h1><br>




<ul>
    <li> * Visiting spiritual places</li>
    <li> * Bird watching and elephant training camp</li><br>
 

    <li> * Beaches and Ayurvedic spa </li>
   <li> * Houseboat and Backwaters</li><br>
   

   <li> * Visit Kuttanad place</li>
   <li> * Spicy delicious foods</li><br>


   <li> * History and Cultural</li>
   <li> * Shopping in alapy</li><br>

      
</ul>
<br><br>
<h2> Day 1: Visiting spiritual places- Bird watching and
     elephant training camp</h2><br>

         <h3>* Ambalapuzha Sree Krishna Temple</h3>
<h4>Duration of visit:1 Hours</h4><br>
<h3>* Chakkulathukavu Sree Bhagavathy Temple</h3>
     <h4>Duration of visit:1Hours</h4><br>
<h3>* st.Mary's Forance Church </h3>
<h4>Duration to visit : 1Hour</h4>
<br>
<h3>* Visit Bird watching and Elephant Training Camp</h3>
<h4>Duration of visit: 4 Hour</h4>
<br>
<h3>* Mullakkal Church</h3>
<h4>Duration of visit: 1Hour</h4><br>
<h1>Overnight stay in our heritage</h1><br>\

<h2>Day 2: Beaches and Ayurvedic spa - Boating and Backwaters</h2><br>
<h3>* visiting Ayurvedic spa</h3><br>
<h3>* Visiting boating and backwater</h3>
<h4>Afternoon food in Houseboat</h4><br>
<h3>* Night in Beach</h3><br>
<br>
<h2>Day 3: Visit Kuttanad place- Spicy delicious foods</h2><br>
<h2>Day 4: Visit Historical and cultural places and shopping </h2>
<center>
    <table border="4">
        

        <tr>
            <td>Hotel</td>
            <td>5000</td>
        </tr>
<tr>
    <td>Transport</td>
    <td>15000</td>
</tr>
<tr>
    <td>food</td>
    <td>5000</td>
</tr>
<tr>
    <td>Total</td>
    <td>25000</td>
</tr>
    
     3Nights and 4 days
    <br>
    </table>
    </center><br>

</div>

<div class="contin-er">
    <form action=""  method="post">
        <div class="flex">
            <div class="box">
                <h1>Online Booking</h1><br><br>
                <div class="box">
                    <p>Enter your Name <span>*</span></p>
                    <input type="text" name="name" class="box" required>
                </div>
                <br>
                <div class="box">
                    <p>Enter your phone no <span>*</span></p>
                    <input type="text" name="number" class="box" required>
                </div>
                <br>
    
                <p>Check in <span>*</span></p>
                <input type="date" name="check_in" class="box" required>
                
            </div>
            <br>
            <div class="box">
                <p>Check out <span>*</span></p>
                <input type="date" name="check_out" class="box" required>
            </div>
            <br>
            <div class="box">
                <p>Adults <span>*</span></p>
                <select name="adult" class="input" required>
                    
                <option value="1">1 Adults</option>
                <option value="2">2 Adults</option>
                <option value="3">3 Adults</option>
                <option value="4">4 Adults</option>
                <option value="5">5 Adults</option>
                <option value="6">6 Adults</option>
            </select>
            </div><br>
            <div class="box">
                <p>Childs <span>*</span></p>
                <select name="child" class="input" required>
                    <option value="-">0 Child</option>
                <option value="1">1 Child</option>
                <option value="2">2 Childs</option>
                <option value="3">3 Childs</option>
                <option value="4">4 Childs</option>
                <option value="5">5 Childs</option>
                <option value="6">6 Childs</option>
            </select>
            </div>
            <br>
            <div class="box">
                <p>Rooms <span>*</span></p>
                <select name="room" class="input" required>
                <option value="1">1 Rooms</option>
                <option value="2">2 Rooms</option>
                <option value="3">3 Rooms</option>
                <option value="4">4 Rooms</option>
                <option value="5">5 Rooms</option>
                <option value="6">6 Rooms</option>
            </select>
            </div>
        </div>
     <br><br>
     <input type="submit"  value="check availability" name="check" class="hero-btn">

</form>
</div>
    </div> 
</section>




     
<!-------footer------->
<section class="footer">
<h4>About Us</h4>
<p>To know more visit personal pages to see more pictures and details</p>
<div class="icons">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
</div>

</section>
    
<!-----javaScript for Toggle menu------>
<script>
    var navlinks=document.getElementById("navlinks");
    function showMenu(){
        navlinks.style.right="0";
    }
    function hideMenu(){
        navlinks.style.right="-200px";
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?php include 'message.php'?>
</body>
</html>