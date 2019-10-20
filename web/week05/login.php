<?php
session_start();


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


$user_name = "";
if (isset($_SESSION["user_name"])) {
  $user_name = $_SESSION["user_name"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_name"]) && isset($_POST["password"])) {
  $user_name = filter_input(INPUT_POST, 'user_name');
  $password = filter_input(INPUT_POST, 'password');

  //preparing query
  $sth = $db->prepare(QUERY_USER_SQL);
  $sth->execute(array(':user_name' => $user_name));
  $sthOut = $sth->fetchAll();
  $sth->closeCursor();
  //check to make sure only one row is returned
  if (isset($sthOut[0]) && !isset($sthOut[1])) {
    $user = $sthOut[0];

    //check to see if the password is valid
    if (password_verify($password, $user["password"])) {
      $_SESSION["isauthenticated"] = true;
      $_SESSION["user_name"] = $user_name;
      header("Location: homepage.php");
    } else {
      echo "<p>
      User and Password not found!
      </p>";
      session_unset();
    }

  } else {
    echo "<p>
    User not found!
    </p>";
    session_unset();
  }

}

?>


<html>
    <body>
            <h1>User Login</h1>

                 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                      <label for="user_name">User Name:</label>
                      <input type="text" name="user_name" value=<?php echo "\"$user_name\""?> <br /><br />


                      <label for="password">Password:</label>
                      <input type="password" name="password">
                      <input type="hidden" name="action" value="password_login" />


                    <input type="submit" value="Submit">
                     </form>
                     <p>
                       <a href="signup.php">Sign up a new user</a>
                     </p>
    </body>
</html>
