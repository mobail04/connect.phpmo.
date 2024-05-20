<?php

    $connect = mysqli_connect('localhost', 'root', '', 'dema');

    if (!$connect) {
        die('Error connect to DataBase');
    }