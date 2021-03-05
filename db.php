<?php

session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php-crud-mysql'
);

// if (isset($conn)) {
//     echo 'DB is connect';
// }

?>