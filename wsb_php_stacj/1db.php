<!DOCTYPE html>
<html lang="pl>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uzytkownicy</title>
</head>
<body>
    <h4>uzytkownicy z db</h4>
    <?php
    require_once "../scripts/connect.php";
    $sql = "SELECT * FROM `users`;";
    $result = $conn->query($sql);
    //$user = $result->fetch_assoc();
    //echo $user["firstName"];
    while($user = $result->fetch_assoc())
    {
        echo <<< USER
        Imie i nazwisko: $user[firstName] $user[lastName]
        <hr>
        USER;
    }
    ?>
</body>
</html>