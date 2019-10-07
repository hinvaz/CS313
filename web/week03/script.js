itemDescrips = [
    "When Nephi encountered the unconscious Laban, he noticed that Laban was wearing a fine sword made of precious steel with a hilt of pure gold.",
    "The golden plates are the source from which Joseph Smith translated the Book of Mormon, a sacred text of the faith.",
    "The Liahona is a brass ball that operates as a type of compass with two spindles.",
    "Two objects of a now unknown nature, possibly used for divination, worn on the breastplate of a Jewish high priest.",
];

function addToCart(item, price) {
    var httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", "cart.php?action=add&item=" + item + "&price=" + price, true);
    httpRequest.send();
}

function removeFromCart(index, price) {
    document.getElementById(index).style.display = "none";
    
    var total = document.getElementById("orderTotal").innerText;
    total -= price;
    document.getElementById("orderTotal").innerHTML = total;
    
    var httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", "cart.php?action=remove&item=" + index, true);
    httpRequest.send();
}

function itemDetails(index) {
    document.getElementById("item-details").innerHTML = itemDescrips[index];
}

function removeDetails() {
    document.getElementById("item-details").innerHTML = "";
}


