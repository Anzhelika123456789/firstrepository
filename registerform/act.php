<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_forms";

    $conn = mysqli_connect($servername, $username, $password, $register_forms);
    mysqli_query ($conn, 'set names utf8');

    if (!$conn) 
    {
        die("Подключение не выполнено: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO register_forms.register_data (name,login,password,password_enter,email,date)
    VALUES ('".$_POST['name']."','".$_POST['login']."','".$_POST['password']."','".$_POST['password_enter']."','".$_POST['email']."','".$_POST['date']."')";

    if (mysqli_query($conn, $sql)) {
        echo "Запись успешно добавлена</br>";
       } else {
        echo "Ошибка добавления записи: " . $sql . "<br>" .
       mysqli_error($conn);
       }

       mysqli_close($conn);
?>