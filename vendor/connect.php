<?php


$connect = mysqli_connect('localhost', 'root', 'root', 'register_test');

if (!$connect) {
    die('Error connect to DataBase');
}
