<?
$servername = "localhost";
$username = "daa";
$password = "daa";
$dbname = "clinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



function getClinicsFromDB($conn){
    $sql = " SELECT"
    ."  id_clinic".id_clinic
    .", name".name
    .", address".address
    .", main_MD".main_MD
    .", phone_clinic".phone_clinic
    ." FROM clinic ";
    return $conn->query($sql);
}

function clinicsFromDBToHTML($result){    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
       //     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}


$result = getClinicsFromDB($conn);
clinicsFromDBToHTML($result);



$conn->close();
?>