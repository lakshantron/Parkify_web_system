<?php
if (isset($_GET['id1']) && isset($_GET['id2']) && isset($_GET['id3']) && isset($_GET['id4'])) {
    $id1 = $_GET['id1'];
    $id2 = $_GET['id2'];
    $id3 = $_GET['id3'];
    $id4 = $_GET['id4'];

    $connection = mysqli_connect("localhost", "root", "", "loginregiser(parkingapp)");

    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Define the DELETE queries for each table
    $deleteQueries = [
        "DELETE FROM parkinglot WHERE o_ID = $id1",
        "DELETE FROM parkingspace WHERE s_ID = $id2",
        "DELETE FROM vihecle WHERE v_ID = $id3",
        "DELETE FROM payment WHERE p_ID = $id4"
    ];

    foreach ($deleteQueries as $query) {
        mysqli_query($connection, $query);
    }

    mysqli_close($connection);

    // Redirect back to the page displaying the table
    header("Location: table.php");
    exit;
} else {
    // Handle the case where one or more IDs are not set
    echo "One or more IDs not set.";
}

?>
