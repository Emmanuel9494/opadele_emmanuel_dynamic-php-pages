<!DOCTYPE html>
<html lang="en">
<?php
//connect to the running database server and the specific database
require_once('includes/connect.php');

//create a query to run in SQL
$query = 'SELECT employees.id AS emp, title, fname, lname, thumb FROM employees, jobs WHERE employees.job_id = jobs.id';

//run the query to get back the content
$results = mysqli_query($connect,$query);
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
        <img src="images/menu-icon.png" alt="main menu" class="col-start-4 col-span-1 m-col-start-11 head-img">
    </section>
    <section id="hero-section" class="grid-con">
        <h2 class="col-span-full">At Your Lowest? Speak</h2>
        <p class="col-span-full">We HearLow!!!</p>
        <h3 class="col-span-full">Yellow People's</h3>
    </section>
    <section id="yellow-teams" class="">
        <div class=" grid-con">
        <h2 class="col-span-full">Select and Know Us.</h2>
        </div>
        <?php
        while ($row = mysqli_fetch_array($results)) {
            echo '
            <div class="team-post grid-con">
                <img src="images/'.$row['thumb'].'" alt="Person one" class="team-post col-start-1 col-span-2">
                <div class="mini-post col-start-3 col-span-2 m-col-span-5">
                    <p class="title">Title:<span>'.$row['title'].'</span></p>
                    <p class="f-name">First Name:<span>'.$row['fname'].'</span></p>
                    <p class="l-name">Last Name:<span>'.$row['lname'].'</span></p>
                    <a href="details.php?id='.$row['emp'].'">
                    <button>Learn More</button>
                    </a>
                </div>
            </div>';
        }
        ?>

       
       
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
         <a href="index.php" class="col-span-full"><img src="images/yellow-pple.png" alt="main logo" ></a>
         <h3 class="col-span-full"><a href="index.php">Yellow People's</a></h3>
         <p class="col-span-full">Ask For A Free Yellow People's Tote Bag!!!</p>
         </footer>
         <div class="php-font">
         <?php
            echo date('l jS \of F Y h:i:s A'); 
            echo'<br>';
            print_r($results);
            ?>
         </div>
        
   
    
   
</body>
</html>