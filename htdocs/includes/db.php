<?php
$servername = "localhost";
$username = "root"; // MySQL 기본 사용자
$password = "1111"; // MySQL 기본 비밀번호
$dbname = "test1"; // 데이터베이스 이름

// 데이터베이스 연결 생성
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>