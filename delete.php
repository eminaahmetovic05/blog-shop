<?php
include('konekcija.php');

// Check if the id parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement to delete the record
    $query = "DELETE FROM podaci WHERE id='$id'";
    $result = mysqli_query($connection, $query);

    // Check if the record was deleted successfully
    if ($result) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
