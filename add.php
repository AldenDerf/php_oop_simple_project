<?php
require 'Library.php';
$library = new Library();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $newBook = [
        'id'=> uniqid(),
        'title' => $_POST['title'],
        'author' =>$_POST['title'],
        'isbn' => $_POST['isbn']
    ];

    $library->addBook($newBook);
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>
    <form method="post" action="add.php">
        <label>Title:<input type="text" name="title"></label><br>
        <label>Author:<input type="text" name="author"></label><br>
        <label>ISBN:<input type="text" name="isbn"></label><br>
        <input type="submit" value="Add Book">
    </form>
</body>
</html>