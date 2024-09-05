<?PHP
require_once("db.php");

$id = $_GET['id'];
$con->query("DELETE FROM student WHERE id=$id");
header("location: show.php");