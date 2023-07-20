<?php


if($_SERVER["REQUEST_METHOD"] == 'POST'){

    include_once ("config.php");

    $bookTitle = $_POST["bookTitle"];
    $bookAuthor = $_POST["bookAuthor"];
    $bookSubject = $_POST["bookSubject"];

    $sql_insert = "INSERT INTO books(`bookTitle`, `bookAuthor`, `bookSUbject`) 
    VALUES ('$bookTitle', '$bookAuthor', '$bookSubject')"; 
mysqli_query($conn, $sql_insert);
echo '<script>alert("Record inserted successfully")</script>"';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details Form</title>
    <link rel="stylesheet" href="index.css">

    <style>
        input[type=submit] {
    background-color: #04AA6D;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 6px 2px;
    cursor: pointer;
  }
    </style>
</head>
<body>
    <div class="signup-box">
        <h1>Book <Details></Details></h1>
        <h4>Please insert the book details below:</h4>
        <form action="" method="post">
            <label>Book Title</label>
            <input type="text" id="bookTitle" name="bookTitle">
            <label>Book Author</label>
            <input type="text" id="bookAuthor" name="bookAuthor">
            <label>Book Subject</label>
            <input type="text" id="bookSubject" name="bookSubject">
            <input type="submit" value="Submit">
        </form> 
    </p>
    </div>
</body>
</html>
