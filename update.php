<?php

include 'database.php';

$id        = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];

$query = "UPDATE student SET firstname = ?, lastname = ? WHERE id = ?";
$stmt  = $conn->prepare($query);
$stmt->bind_param("ssi", $firstname, $lastname, $id);
$stmt->execute();
$stmt->close();

header('Location: index.php');