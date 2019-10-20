<html>
    <body>
        <?php
            //session_start();
            //session_unset();

            define("QUERY_USER_SQL", "SELECT * FROM public.login WHERE user_name = :user_name");

            // default Heroku Postgres configuration URL
            $dbUrl = getenv('DATABASE_URL');


            if (empty($dbUrl)) {
             // example localhost configuration URL with postgres username and a database called cs313db
            $dbUrl = "postgres://postgres:falcon505@localhost:5432/postgres";
            }


            $dbopts = parse_url($dbUrl);




            $dbHost = $dbopts["host"];
            $dbPort = $dbopts["port"];
            $dbUser = $dbopts["user"];
            $dbPassword = $dbopts["pass"];
            $dbName = ltrim($dbopts["path"],'/');




            try {
             $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

             //print "<p>pgsql:host=$dbHost;port=$dbPort;dbname=$dbName</p>\n\n";


            }
            catch (PDOException $ex) {
             print "<p>error: $ex->getMessage() </p>\n\n";
             die();
            }


            error_reporting(E_ALL);
            ini_set('display_errors', 1);

            //get and validate input from form
            $user_name = filter_input(INPUT_POST, 'user_name');
            $password = filter_input(INPUT_POST, 'password');

            // Validate inputs
            if ($user_name == null || $password == null ) {
                echo 'You must fill in all fields.';
            } else {

                //hash the password
                $hashpass = password_hash($password, PASSWORD_DEFAULT);

                //test to see if the user already exists
                // Add the scriptures to the database
                $query = 'INSERT INTO login
                             (user_name, password)
                          VALUES
                             (:user_name, :password)';
                $statement = $db->prepare($query);
                $statement->bindValue(':user_name', $user_name);
                $statement->bindValue(':password', $hashpass);
                if ($statement->execute()) {
                  $statement->closeCursor();

                  $_SESSION["user_name"] = $user_name;
                  header("Location: login.php");
                } else {
                  echo 'User already exists.';
                }


            }


                     ?>

        <form action="signup.php" method="post">
            <label for="user_name">User Name:</label>
            <input type="text" name="user_name"><br /><br />


            <label for="password">Password:</label>
            <input type="password" name="password">


          <input type="submit" value="Submit">
        </form>

    </body>
</html>
