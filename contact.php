<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
    </style>
    <title>Kontakt</title>
</head>
<body>

    <!-- HEADER SEKCIJA -->
    <header>
        <div class="navigation">
            <div class="logo">
                <img src="images/logo2.png" alt="">
            </div>
            <ul>
                <li>
                    <a href="trgovina.php">Nagrade</a>
                </li>

                <li>
                    <a href="shop.php">Trgovina</a>
                </li>
                <li>
                    <a href="index.html">Početna</a>
                </li>
                <li>
                    <a href="about.html">O nama</a>
                </li>
                <li>
                    <a href="contact.html">Kontakt</a>
                </li>
                <li>
                    <a href="gallery.html">Galerija</a>
                </li>
                <li>
                    <a href="blog.html">Blog</a>
                </li>
            </ul>
        </div>
    </header>
    <!-- KRAJ HEAER SEKCIJE -->

    <!-- KONTAKT SEKCIJA -->
    <!-- DRUŠTVENE MREŽE -->
   <div class="contact-section">
    <div class="contact-buttons">
        <div class="contact-button">
            <a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook fa-lg"></a>
            <p>Kontaktirajte nas na Facebooku</p>
        </div>
        <div class="contact-button">
            <a href="https://www.instagram.com/" target="_blank"  class="fa fa-instagram fa-lg"></a>
            <p>Kontaktirajte nas na Instagramu</p>
        </div>
        <div class="contact-button">
            <a href="https://twitter.com/?lang=en" target="_blank" class="fa fa-twitter fa-lg"></a>
            <p>Kontaktirajte nas na Twitteru</p>
        </div>
        <div class="contact-button">
            <a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube fa-lg"></a>
            <p>Pratite nas na YouTubeu</p>
        </div>
        <div class="contact-button">
            <a href="mailto:info@mops.com" target="_blank" class="fa fa-envelope fa-lg"></a>
            <p>Kontaktirajte nas putem mejla</p>
        </div>
        <div class="contact-button">
            <a href="tel:+38755217100" class="fa fa-phone fa-lg"></a>
            <p>Kontaktirajte nas putem telefona</p>
        </div>
    </div>
    <!-- KRAJ KONTAKT SEKCIJE -->

    <!-- KONTAKT FORMA -->
    <div class="form">
        <h3>Kontakt forma</h3>
        <form name="forma"  onsubmit="return fullFormValidation()" action="contact.php" method="post"> 
            Unesite Vaše ime:
            <input type="text" name="usernamee">
            <h3 id="info-tekst1"></h3>
            Unesite Vaš Email:
            <input type="email" name="email">
            <h3 id="info-tekst2"></h3>
            Unesite poruku:
            <input type="text" name="poruka">
            <h3 id="info-tekst3"></h3>
           
            <input type="submit" value="Send">
            <h3 id="tekst"></h3>
          </form>
    </div>
</div>

<?php

        $host="localhost";
        $db="maturski";
        $username="root";
        $pass="";
        $conn= mysqli_connect(
            hostname:$host,
            username:$username,
            password:$pass,
            database:$db
            );
ini_set('display_errors', '0');
// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// get data
$user_name = $_POST['usernamee'];
$email = $_POST['email'];
$poruka = $_POST['poruka'];

// insert data into table
$sql = "INSERT INTO korisnik(usernamee, email, poruka) VALUES ('$user_name', '$email', '$poruka')";

if (mysqli_query($conn, $sql)) {
    echo "Vaši podaci će biti spremljeni, Hvala Vam na izdvojenom vremenu!";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
mysqli_close($conn);

?>


   <!-- KRAJ KONTAKT SEKCIJE -->

   <!-- MAPA -->
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5825480.2883499665!2d18.846471!3d44.525951!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4de99772ba5b7e12!2sUzgoj%20i%20prodaja%20pasa%20pasmine%20Mops(Pug)!5e0!3m2!1shr!2sba!4v1607196840843!5m2!1shr!2sba" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  
    <footer>
    <p>Copyright © 2023 Elektrotehnička škola , Tuzla</p>

    <script type="text/javascript" src="js/forma.js"></script>
</footer>
</body>
</html>