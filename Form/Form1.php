<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Get</title>
</head>
<body>
    <h2>Book Store</h2>
    <div>
        <form action="" method="get">
            <div>
                <label for="bookTitle">Search the book title : </label>
                <input type="text" name="bookTitle" id="bookTitle" required>
            </div>

            <div>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>

        <h2>Output</h2>
        <?php 
        $bookTitle = $_GET['bookTitle'] ?? 'No book title provided';
        echo "<p> Book Title : $bookTitle </p>";
        ?>
    </div>
</body>
</html>