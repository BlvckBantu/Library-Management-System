<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
  }

  th {
    background-color: #dddddd;
  }
    </style>
</head>
<body>
    <table id="books-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Author</th>
      <th>Subject</th>
    </tr>
  </thead>
  <tbody id="books-body">
  </tbody>
</table>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT bookTitle, bookAuthor, bookSubject FROM books";
$result = $conn->query($sql);

$books = array();
$result = $conn->query($sql);
if ($result !== false) {
  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
  } else {
    echo "No results found.";
  }
} else {
  echo "Error executing query: " . $conn->error;
}
$conn->close();

echo json_encode($books);
?>

