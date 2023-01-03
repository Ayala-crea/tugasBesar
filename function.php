<?php

$conn = mysqli_connect("localhost", "root", "", "users");

function registrasi($data) {
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //konfirmasi password
    if( $password !== $password2) {
        echo "<script>
            alert('konfirmasi password tidak sesuai!');
        </script>";

        return false;
    }
    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username'
    , '$password')");
    
    return mysqli_affected_row($conn);
}   
?>
