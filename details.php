<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');

$query = 'SELECT employees.id AS emp, title, description, fname, lname, image FROM employees, jobs WHERE jobs.id = employees.job_id AND employees.id ='.$_GET['id'];

$results = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($results);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/yellow-pple.png"  rel="icon" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Yellow People's</title>
</head>
<body>
    <h1 class="hidden"> Welcome To The Yellow People's Symphony</h1>
    <section id="main-head" class="grid-con">
        <h2 class="hidden">Yellow People's Homepage</h2>
        <a href="index.php" class="col-start-1 col-span-1"><img src="images/yellow-pple.png" alt="main logo" ></a>
        <h3 class="col-start-2 cols-span-2"><a href="index.php">Yellow People's</a></h3>
        <img src="images/menu-icon.png" alt="main menu" class="col-start-4 col-span-1 m-col-start-11 m-col-span-1  head-img">
    </section>
    <section id="hero-section" class="grid-con">
        <h2 class="col-span-full">At You Lowest? Speak</h2>
        <p class="col-span-full">We HearLow!!!</p>
        <h3 class="col-span-full">Yellow People's</h3>
    </section>
    <section id="yellow-teams" class="grid-coxn">
        <h2 class="col-span-full">Select and Know Us.</h2>

        <?php
        
            echo '<div class="team-post grid-con">
            <img src="images/'.$row['image'].'" alt="'.$row['fname'].'" class="team-post col-start-1 col-span-2">
            <div class="mini-post col-start-3 col-span-2 m-col-start-3  m-col-span-7"><p class="title">Title:<span>'.$row['title'].'</span></p>
            <p class="f-name">First Name:<span>'.$row['fname'].'</span></p><p class="l-name">Last Name:<span>'.$row['lname'].'</span></p>
            <a href="index.php"><button>Back To Home</button></a>
            </div><p class="description col-span-full">Description:<span>'.$row['description'].'</span></p>
            </div>';
        
        ?>
    </section>
   
    <section id="fall-section" class="grid-con">
        <h2 class="col-span-full">Turning whispers of despair into echoes of hope</h2>
        <p class="col-span-full">We Are here to listen!!!</p>
        <h3 class="col-span-full">Yellow People's</h3>
    </section>
   
          
        <!-- contact Us -->
         <section id="contact-us" class="grid-con">
            <h2 class="hidden"> Contact The Yellow Customer Service </h2>
            <h2 class="col-span-full">Contact Yellow People</h2>
            <div class="col-span-full">
            <form method="post" action="sendmail.php">

            <label for="first_name">First Name: </label>
            <input type="text" name="first_name" id="first_name">

            <br><br>

            <label for="last_name">Last Name: </label>
            <input type="text" name="last_name" id="last_name">

            <br><br>

            <label for="email">Email: </label>
            <input type="text" name="email" id="email">

            <br><br>

            <label for="comments">Comments: </label>
            <textarea name="comments" id="comments">comment here</textarea>

            <br><br>

            <input type="submit" value="send">
            </form>
            </div>
         </section>
        <!-- Footer -->
        <footer id="main-footer" class="grid-con">
         <a href="index.php" class="col-span-full m-col-span-full"><img src="images/yellow-pple.png" alt="main logo" ></a>
         <h3 class="col-span-full"><a href="index.php">Yellow People's</h3></a>
         <p class="col-span-full">Ask For A Free Yellow People's Tote Bag!!!</p>
         </footer>

         <div class="php-font">
         <?php
           print_r($results);
            ?>
         </div>
</html>