<?php
    // Establish a connection
    // Replace this info with your MySQL server info

$link = mysqli_connect('127.0.0.1', 'root', 'aharif', 'WordPress');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_query($link, "SELECT COUNT(*) FROM wordpress.wp_users")) {
    printf("Errormessage: %s\n", mysqli_error($link));
}

printf("successful");

/* close connection */
mysqli_close($link);

?>
