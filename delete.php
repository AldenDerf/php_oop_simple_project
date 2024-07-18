<?php
require 'Library.php';
$library = new Library();

if (isset($_GET['id'])) {
    $library->deleteBook($_GET['id']);
}

header('Location: index.php');
