<?php
include './connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $role = $_POST["role"];
    
if(!$name || ! $email ){
    echo "remplir tous les champs";
}
else{
    $stmt = $conn->prepare("INSERT INTO users (name, email,role_id ) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name, $email,  $role);

    if ($stmt->execute()) {
         echo "<div >user ajouté avec succès!</div>";
        header("location: index.php");
    } else {
        echo "<div >Erreur: " . $stmt->error . "</div>";
    }
    $stmt->close();

}  

}
$conn->close();
?>