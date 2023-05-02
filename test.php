<?php
include('inc/database.php');

$conn	= db();
//$query	= $conn->prepare("SHOW COLUMNS FROM producer");
//$query->execute();

/*
//See all column names
$q = $conn->prepare("SHOW COLUMNS FROM data");
$q->execute();
$table_fields = $q->fetchAll(PDO::FETCH_COLUMN);

foreach ($table_fields as $key => $value) {
  echo "'$".$value."', ";
}
*/

//INSERT INTO kglt2 (value) VALUES ('0'), ('0,250'), ('0,300'), ('0,350'), ('0,400'), ('0,450'), ('0,500'), ('0,750'), ('1,000')

$sql = "SELECT MAX(id) FROM data";
$query	= $conn->prepare($sql);
$query->execute();
$id_data = $query->fetchColumn();

echo $id_data;

//$sql = "SELECT nutrition_enrichment_kglt FROM data INNER JOIN diet2 ON data.nutrition_enrichment_kglt = diet2.value";


?>
