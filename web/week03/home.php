<?php

session_start();

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['price'] = array();
}

?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Browse Items | MME</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="container">
        <header>
            <h1>Moroni Store</h1>
            <a href="viewCart.php">View Cart</a>
        </header>

        <nav></nav>

        <main>
            <p></p>

            <section>
                <h2>Inventory</h2>
                
                <div id="item-details">
                    
                </div>
                
                <table>
                    <tr>
                        <td><button onclick="addToCart('Sword of Laban', 150)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(0)" onmouseout="removeDetails()">Sword of Laban</td>
                        <td>$150 </td>
                    </tr>
                    <tr>
                        <td><button onclick="addToCart('Golden Plates', 900)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(1)" onmouseout="removeDetails()">Golden Plates</td>
                        <td>$900</td>
                    </tr>
                    <tr>
                        <td><button onclick="addToCart('Liahona', 120)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(2)" onmouseout="removeDetails()">Liahona</td>
                        <td>$120 </td>
                    </tr>
                    <tr>
                        <td><button onclick="addToCart('Urim and Thummin', 1120)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(3)" onmouseout="removeDetails()">Urim and Thummin</td>
                        <td>$1120</td>
                    </tr>
                </table>
            </section>
        </main>

        <footer>
        </footer>
    </div>
    <script src="script.js" type="text/javascript"></script>
</body>

</html>
