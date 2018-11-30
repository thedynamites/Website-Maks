<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "producten";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT productid, productname, descript, price FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["productid"]. " - " . $row["productname"]. " - " . $row["descript"]. " - " . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}


  function export(array $csv_array, $fileName) {

    // pak alle data uit de CSV
    $data = file_get_contents($fileName);

    // Zet counter op 0
    $counter = 0;
    
    foreach($csv_array as $fields) {
        // plaats elk veld naar de data.
        $data .= $fields;
        // na elk behandelde veld word de counter verhoogt met 1
        $counter++;
        // Post data heeft 4 velden. als de counter hetzelfde is als 4 dan word er een nieuwe lijn toegevoegt in je CSV.
        // Een comma word geplaatst om te scheiden.
        if($counter == 4) {
          $data .= PHP_EOL;
        } else {
          // hier word het met comma gescheiden.
          $data .= ',';
        }
    }

    // Maak de CSV compleet.
    file_put_contents($fileName, $data);

  }

  // Maak een array
  $post_array = array();

  // Check de ingezonden info en roep de export functie aan om info te adden in de CSV bestand.
  if(isset($_POST['Datum'])) {

    $Datum = strip_tags(htmlspecialchars($_POST['Datum']));
    $Tijd = strip_tags(htmlspecialchars($_POST['Tijd']));
    $Afspraak = strip_tags(htmlspecialchars($_POST['Afspraak']));
    $Adres = strip_tags(htmlspecialchars($_POST['Adres']));
  
    array_push($post_array,$Datum,$Tijd,$Afspraak,$Adres);

    export($post_array,'appointments.csv');
    
  }
// Close connection
$conn->close();

?>