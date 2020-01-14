<?php

$servername = "localhost";
$username = "id11354574_cossea";
$password = "EliluSQL";
$dbname = "id11354574_test_my_sql";

$conn = new Mysqli($servername, $username, $password);
//var_dump($conn);


if ($conn ->connect_error) {
    echo $conn ->connect_error;
} else {
    $conn->select_db($dbname);

    $sql = "INSERT INTO eleves VALUES(NULL , 'Dupont','Robert', '25')";
    $conn->query($sql);
    echo $conn ->error;

    echo $conn->insert_id;

    $stmt = $conn->prepare("INSERT INTO eleves (nom) VALUES (?)");
    $stmt->bind_param("s",$nom);

    $nom = "Jacques";
    $stmt->execute();

    $nom = "Jacques1";
    $stmt->execute();

    $nom = "Jacques2";
    $stmt->execute();

    $stmt->close();

    $sql = "SELECT * fROM `eleves` WHERE 1";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc())
    {
        echo $row["age"]."<br>";
    };



}





