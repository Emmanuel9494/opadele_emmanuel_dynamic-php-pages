<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/trivox-Logo.svg"  rel="icon" type="image/svg+xml">
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
        <div class="team-post grid-con">
            <img src="images/person1th.jpg" alt="Person one" class="team-post col-start-1 col-span-2">
            <div class="mini-post col-start-3 col-span-2 m-col-start-3  m-col-span-5">
            <p class="title">Title:<span>ceo</span></p>
            <p class="f-name">First Name:<span>Mary</span></p>
            <p class="l-name">Last Name:<span>Smith</span></p>
            <button onclick="location.href='index.php'">Back To Home</button>
            </div>
            <p class="description col-span-full">Description:<span>The CEO is the highest-ranking executive responsible for the overall success of the organization. They set strategic goals, make major corporate decisions, and ensure the company's vision is realized. They work closely with stakeholders, the board of directors, and other executives to drive growth and profitability.</span></p>
        </div>
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
   
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>