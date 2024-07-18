<?php 
require 'Librar()';
$book = $library->getBook($_GET['id']);

if (!$book) {
    die('Book not found');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $updatedBook =[
        'id' => $_POST['id'],
        'title' => $_POST['title'],,
        'author' => $_POST['author'],
        'isbn' => $_POST['isbn']
    ];

    $library->updateBook($updatedBook);
    header('LOCATION: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form method="post" action="edit?id<? htmlspecialchars($book['id'])?>">
        <input type="hidden" name="id" value="<? htmlspecialchars($boo['title'])?>" reuired>
        <label for="title">
            Title: <input id="title" type="text" name="title" value="<? htmlspecialchars($book['title'])?>" required>
        </label><br>

        <label for="author">
            Author: <input id="title" type="text" name="author" value="<? htmlspecialchars($book['author'])?>" required>
        </label><br>

        <label for="isbn">
            ISBN: <input id="isbn" type="text" name="isbn" value="<? htmlspecialchars($book['isbn'])?>"required>
        </label><br>
        <input type="submit" value="Update Book">
    </form>
</body>
</html>