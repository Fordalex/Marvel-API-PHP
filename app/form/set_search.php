<?php
session_start();

$_SESSION['search'] = $_GET['search'];

header('location: ../../?page=character');