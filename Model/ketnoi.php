<?php
class clsKetNoi
{
    public function moketnoi()
    {
        $host = "localhost";
        $user = "root";
        $password = ""; // Mặc định của WAMP là không có mật khẩu
        $db = "WEBPHP";

        $conn = mysqli_connect($host, $user, $password, $db);
        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function dongketnoi($conn)
    {
        if ($conn) {
            $conn->close();
        }
    }
}
