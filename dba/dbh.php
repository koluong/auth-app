<?php

$conn = mysqli_connect('127.0.0.1', 'root', '1022', 'auth_app');

if (!$conn) {
    die('Connection failed: '.mysqli_connect_error());
}