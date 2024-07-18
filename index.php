<?php
    require 'Library.php';
    $library = new Library();
    $books = $library->getBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
</head>
<body>
        <h1>Library Management</h1>
        <a href="add.php">Add New Book</a>

        <table border="1">
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Actions</th>
            </tr>
        
                <?php foreach($books as $book): ?>
                    <tr>
                        <td><?= htmlspecialchars($book['book_id']) ?></td>
                        <td><?= htmlspecialchars($book['title']) ?></td>
                        <td><?= htmlspecialchars( $book['author']) ?></td>
                        <td><?= htmlspecialchars( $book['isbn']) ?></td>
                        <td>
                            <a href="edit.php?id=<?= htmlspecialchars( $book['book_id']) ?>">Edit</a>
                            <a href="delete.php?id=<?= htmlspecialchars( $book['book_id']) ?>">Delete</a>
                        </td>
                    </tr>
            <?php endforeach ?>
        </table>
    
</body>
</html>