<?php
include 'sessionstart.php';

$hero = filter_input(INPUT_POST, 'hero');
$villain = filter_input(INPUT_POST, 'villain');
$movie = filter_input(INPUT_POST, 'movie');
$sidekick = filter_input(INPUT_POST, 'sidekick');


$herofile = fopen("hero.txt", "a") or die("Unable to open file!");
    $txt = "$hero\n$villain\n$movie\n$sidekick\n";
    fwrite($herofile, $txt);
    fclose($herofile);

    $_SESSION["form"] = "true";
      var_dump($hero,$villain,$movie,$sidekick);
   
    if($_SESSION["form"]){
        header('Location: surveyresults.php');
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CS 313 | Survey</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles.css" type="text/css" rel="stylesheet" />
        <script type='text/javascript' src='js/header.js'></script>
    </head>
    <body>
        <header>
            <div id ="header_logo">
                <div id="header_bg"></div>
                <a href="home.html"><img src="newlogo.png" alt="Sarah Broat logo" id="logo"/></a>
            </div>
             <div class="center">
                <button class="toggle-nav" onclick="listFunction()">
                    <span>></span>
                </button>
                <nav>
                    <ul id="list">
                        <li><a href="home.html">Home</a></li>
                        <li><a href="assignments.html">Assignments</a></li>
                        <li><a href="about.html">About</a></li>
                    </ul>
                </nav>
            </div>
        </header>   
        <main>
            <div id="container" class="center">
                    <section id="content">
                        <h1 id="h1-index">Marvel Survey</h1><br />
                        <div id="text-index">
                            <form method="post" action="surveyresults.php">
                                <strong>Select your favorite Marvel hero:</strong><br>
                                <input type="radio" name="hero" value="Captain America" checked> Captain America<br>
                                <input type="radio" name="hero" value="Thor"> Thor<br>
                                <input type="radio" name="hero" value="Spider Man"> Spider Man<br>
                                <input type="radio" name="hero" value="Iron Man"> Iron Man<br><br>
                                <strong>Select your favorite Marvel villain:</strong><br>
                                <input type="radio" name="villain" value="Loki" checked> Loki<br>
                                <input type="radio" name="villain" value="Magneto"> Magneto<br>
                                <input type="radio" name="villain" value="Doctor Doom"> Doctor Doom<br>
                                <input type="radio" name="villain" value="Red Skull"> Red Skull<br><br>
                                <strong>Select your favorite Marvel movie:</strong><br>
                                <input type="radio" name="movie" value="Captain America: The First Avenger" checked> Captain America: The First Avenger<br>
                                <input type="radio" name="movie" value="Thor"> Thor<br>
                                <input type="radio" name="movie" value="The Avengers"> The Avengers<br>
                                <input type="radio" name="movie" value="Iron Man"> Iron Man<br><br>
                                <strong>Select your favorite Marvel sidekick:</strong><br>
                                <input type="radio" name="sidekick" value="Bucky Barnes" checked> Bucky Barnes<br>
                                <input type="radio" name="sidekick" value="Foggy Nelson"> Foggy Nelson<br>
                                <input type="radio" name="sidekick" value="Rhodey"> Rhodey<br>
                                <input type="radio" name="sidekick" value="Jubilee"> Jubilee<br><br>
                                <input type="submit" value="Submit">
                            </form>
                            <br /><br />
                            <p><a href="surveyresults.php">See results</a></p>
                        </div>
                    </section>
                </div>
        </main>    
        <footer>
            <div class="center">
                <div class="copyright">
                    <p>All content &copy; Sarah Broat 2016.</p>
            </div>
        </footer>
    </body>
</html>
