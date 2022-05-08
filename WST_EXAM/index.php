<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form </title>
</head>
<body>
    <div class = "container">
        <a href="display.php">Display Books</a>
        <a href="update.php">Update Books</a>
        <a href="delete.php">Delete Books</a>
        <a href="show.php">Display Book</a>
        <br><br>
        <h3>Add Books</h3>
        <br><br>
        <form class="myForm" method="POST" action="insert.php">
            <h3>Booktitle</h3>
            <input type="text" name = "booktitle" placeholder="Enter Booktitle"required><br><br>
            <h3>Year</h3>
            <input type="text" name = "year" placeholder="Enter year of publication" required><br><br>
            <h3>Category</h3>
            <input type="text" name = "category" placeholder="Enter the category"required>
            <br>
            <button value = "submit" class= "submit" name="submit">SUBMIT</button>
        </form>
    </div>
</body>

</html>