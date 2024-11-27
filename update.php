<?php
    include('konekcija.php');

if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $ime = $_POST['fime'];
    $pas = $_POST['fpas'];
    $slika = $_FILES['fslika']['name'];

    // Update the record in the database
    $query = "UPDATE podaci SET ime='$ime', pas='$pas', slika='$slika' WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // If the update was successful, upload the new image file (if provided)
        if (!empty($slika)) {
            move_uploaded_file($_FILES['fslika']['tmp_name'], $slika);
        }
        // Redirect back to the index page
        header("Location: index.php");
        exit();
    } else {
        // If the update failed, display an error message
        echo "Error updating record: " . mysqli_error($connection);
    }
    if (isset($_POST['cancel'])) {
    header("Location: index.php");
    exit();
}


// Close connection
mysqli_close($connection);

}

?>