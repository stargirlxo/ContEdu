<?
include 'con.php';
$quereyResult = $con->query("SELECT * FROM `docs` ") or die($connect->error);
$result=array();
while($fetchData=$quereyResult->fetch_assoc()){
$result[]=$fetchData;
}
echo json_encode($result);