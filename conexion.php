<?php 

//$con= pg_connect("host='localhost' dbname=test port=5432 user=postgres password=longevo123") or die ("Error de conexion".pg_last_error());

$myPdo= new PDO("pgsql:host=localhost;dbname=test","postgres","longevo123");

print 'Holi';

$sql= 'select * from public."Likes"';

foreach($myPdo->query($sql) as $row){
    print "<br/>";
    print $row['Id_Likes'].'-'.$row['Id_Video'].'-'.$row['Id_Usuario'].'-'.$row['Booleano'].'<br/>';
}

//$result= pg_query($con, "Select * from public.'Likes'");

//echo($result);

?>

