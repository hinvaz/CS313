<html>
    <body>
        <?php

            // default Heroku Postgres configuration URL
            $dbUrl = getenv('DATABASE_URL');

            if (empty($dbUrl)) {
             // example localhost configuration URL with postgres username and a database called cs313db
             $dbUrl = "postgres://postgres:falcon505@localhost:5432/scripture";
            }

            $dbopts = parse_url($dbUrl);


            $dbHost = $dbopts["host"]; 
            $dbPort = $dbopts["port"]; 
            $dbUser = $dbopts["user"]; 
            $dbPassword = $dbopts["pass"];
            $dbName = ltrim($dbopts["path"],'/');


            try {
             $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);


            }   
            catch (PDOException $ex) {
             print "<p>error: $ex->getMessage() </p>\n\n";
             die();
            }

            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            
            //get and validate input from form
            $book = filter_input(INPUT_POST, 'book');
            $chapter = filter_input(INPUT_POST, 'chapter', FILTER_VALIDATE_INT);
            $verse = filter_input(INPUT_POST, 'verse', FILTER_VALIDATE_INT);
            $content = filter_input(INPUT_POST, 'content');
            $faith = filter_input(INPUT_POST, 'faith');
            $sacrifice = filter_input(INPUT_POST, 'sacrifice');
            $charity = filter_input(INPUT_POST, 'charity');
            
            //$query = "INSERT INTO scripture VALUES ('$book','$chapter', '$verse', '$content')";  
  
            // Validate inputs
            if ($book == null ||
                    $chapter == null || $chapter == false || 
                    $verse == null || $verse == false ||
                    $content == null ||
                    $faith == null && $sacrifice == null && $charity == null) {
                echo 'You must fill in all fields.';
            } else {

                // Add the scriptures to the database  
                $query1 = 'INSERT INTO scripture
                             (scripturebook, scripturechapter, scriptureverse, scripturetext)
                          VALUES
                             (:book, :verse, :chapter, :content)';
                $statement1 = $db->prepare($query1);
                $statement1->bindValue(':book', $book);
                $statement1->bindValue(':chapter', $chapter);
                $statement1->bindValue(':verse', $verse);
                $statement1->bindValue(':content', $content);
                $statement1->execute();
                $statement1->closeCursor();
                
                $query2 = 'INSERT INTO topics
                             (topicsname)
                          VALUES
                             (:faith)';
                $statement2 = $db->prepare($query2);
                $statement2->bindValue(':faith', $faith);
                $statement2->execute();
                $statement2->closeCursor();
                
                $query3 = 'INSERT INTO topics
                             (topicsname)
                          VALUES
                             (:charity)';
                $statement3 = $db->prepare($query3);
                $statement3->bindValue(':charity', $charity);
                $statement3->execute();
                $statement3->closeCursor();
                
                $query4 = 'INSERT INTO topics
                             (topicsname)
                          VALUES
                             (:sacrifice)';
                $statement4 = $db->prepare($query4);
                $statement4->bindValue(':sacrifice', $sacrifice);
                $statement4->execute();
                $statement4->closeCursor();
            }
            
            echo 'Thank you for submitting new scriptures!';
            echo '<br />';
                     ?>
        <a href="week6scripture.php"><strong>Add another!</strong></a>

    </body>
</html>


