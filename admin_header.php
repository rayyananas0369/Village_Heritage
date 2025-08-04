<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<header class="header">

<section class="flex">

   <a href="dash.php" class="logo">AdminPanel.</a>

   <nav class="navbar">
      <a href="dash.php">home</a>
      <a href="mybooking.php">bookings</a>
      <a href="admins.php">admins</a>
      <a href="contact.php">messages</a>
      <a href="register.php">register</a>
      <a href="login.php">login</a>
      <a href="admin_logout.php" onclick="return confirm('logout from this website?');">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

</header>
</body>
</html>