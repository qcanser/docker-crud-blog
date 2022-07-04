<?php


// Create connection
function dbConnect()
{
	$servername = "db";
	$username = "root";
	$password = "secret";
	$dbname = "blog_posts";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else {
		return $conn;
	}
}

function getPosts()
{
	$connection = dbConnect();
	$sql = "SELECT * FROM blog_posts ORDER BY data DESC";
	$result = $connection->query($sql);
	return $result;
}

function getRowByID($id)
{
	$connection = dbConnect();
	$sql = "SELECT * FROM blog_posts WHERE id = $id";
	$result = $connection->query($sql);
	return $result;
}

function insertUpdatedRow($id, $title, $body)
{
	$connection = dbConnect();
	$sql = "UPDATE blog_posts SET post_title = '$title', post_body = '$body' WHERE id = $id";
	$result = $connection->query($sql);
	header("Location: /admin/index.php");

	
}

function insertNewRow($blog_title, $post_body, $author)
{
	$connection = dbConnect();
	$sql = "INSERT INTO blog_posts (post_title,post_body,author) VALUES ('$blog_title','$post_body','$author')";
	$result = $connection->query($sql);
	header("Location: /admin/index.php");
}

function delete($id)
{
	$connection = dbConnect();
	$sql = "DELETE FROM blog_posts WHERE id = $id";
	$result = $connection->query($sql);
	header("Location: /admin/index.php");
}

?>
