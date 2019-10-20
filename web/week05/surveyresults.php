<?php
include 'sessionstart.php';

$hero = filter_input(INPUT_POST, 'hero');
$villain = filter_input(INPUT_POST, 'villain');
$movie = filter_input(INPUT_POST, 'movie');
$sidekick = filter_input(INPUT_POST, 'sidekick');

?>
<!DOCTYPE html>
<html>
    <head>
        <title>CS 313 | Survey Results</title>
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
                        <h1 id="h1-index">Survey Results</h1>
                        <div id="text-index">
                            <p>You voted for <strong><?php echo $hero; ?></strong> as your favorite hero</p><br />
                            <p>You voted for <strong><?php echo $villain; ?></strong> as your favorite villain</p><br />
                            <p>You voted for <strong><?php echo $movie; ?></strong> as your favorite movie</p><br />
                            <p>You voted for <strong><?php echo $sidekick; ?></strong> as your favorite sidekick</p>
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
