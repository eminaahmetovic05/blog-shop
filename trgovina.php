<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/shop.css">
    <title>Blog</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

        
		table {
			margin: 0 auto;
			background-color: pink;
		}

		th, td {
			padding: 10px;
		}

		th {
			background-color: white;
			font-weight: bold;
		}

		img {
			max-width: 100px;
			max-height: 100px;
		}

    </style>
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
                    <a href="contact.php">Kontakt</a>
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
    <!-- KRAJ HEADER SEKCIJE -->

    <!-- FORM -->
    <div class="form">
        <h3> Učestvuj u Giveaway-u i osvoji ogrlicu ! </h3>
        <form action =""  method="post" autocomplete="off" enctype="multipart/form-data">
            Unesite Vaše ime:
            <input type="text" name="fime">
            <h3 id ="tekst1"></h3>
            Unesite ime psa:
            <input type="text" name ="fpas">
            <h3 id ="tekst2"></h3> 
            Unesite sliku psa:
            <label for="avatar"></label>
            <input type="file" id="avatar" name="fslika">
            <input type="submit" name="submit" value="Send">
            <input type="submit" name="delete" value="Delete">
         
            <h3 id ="tekst"></h3>
        </form>
</div>




    </div>
  
                        <?php
                            include('konekcija.php');
                                if(isset($_POST['submit'])){
                                    $ime = $_POST["fime"];
                                    $pas = $_POST["fpas"];
                                    $slika=$_FILES['fslika']['name'];
                                    $query="insert into podaci(ime,pas,slika) values('$ime','$pas','$slika')";
                                    $res=mysqli_query($connection,$query);

                                    if($res){
                                        move_uploaded_file($_FILES['fslika']['tmp_name'], "$slika");

                                    }

                                }
                                
                                // Execute query to retrieve all data from shop table
                                if(isset($_POST['submit'])){
                                $query = "SELECT * FROM podaci";
                                $res = mysqli_query($connection, $query);

                                // Generate HTML output
                                if (mysqli_num_rows($res) > 0) {
                                echo " <table> ";
                                echo "<tr><th>Ime</th><th>Pas</th><th>Slika</th></tr>";
                                while ($row = mysqli_fetch_array($res)) {
                                   
                                    echo "<tr><td>" . $row['ime'] . "</td><td>" . $row['pas'] . "</td><td><img src='" . $row['slika'] . "'></td></tr>";
                                    
                                }
                                echo "</table> ";
                                } else {
                                echo "No data found.";
                                }

                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr><td>" . $row['ime'] . "</td><td>" . $row['pas'] . "</td><td><img src='" . $row['slika'] . "'></td><td><form method='post' action='delete.php'><input type='hidden' name='id' value='" . $row['id'] . "'><button type='submit' name='delete'>Delete</button></form></td></tr>";
                            }
                                }

                                // Close connection
                                mysqli_close($connection);

                        ?>



            </div>
        </div>
    </div>
    <!-- KRAJ BLOG SEKCIJE -->

    <footer>
        <p>Copyright © 2023 Elektrotehnička škola , Tuzla</p>
    </footer>
</body>

</html>