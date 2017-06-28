<head>
<title>jQuery UI Accordion - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>

<style type="text/css">

* {
	font-family: Arial, Helvetica, sans-seriff;


}
</style>

</head>

<?php
/* Wyszukiwanie za słowem kłuczowym */

include "db_connect.php";
$keywordfromform = $_GET["keyword"];
echo $keywordfromform;
//Początek odbioru danych z tabeli
echo "<h1>Show all jokes with the '$keywordfromform' word</h1>";
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table  WHERE Joke_question LIKE '%".$keywordfromform."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
?>

<div id="accordion">

<?php
    while($row = $result->fetch_assoc()) {
        //echo "JokesID: " . $row["JokeID"]. " Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
        echo "<h3> $row[Joke_question] </h3>";
        echo "<div><p> $row[Joke_answer] </p></div>";
    }
} else {
    echo "0 results";
}
//Koniec odbioru danych z tabeli i pokazu ich

?>