<?php
$email = $_POST["email"];
$password =  $_POST["password"];

$conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' ) ;
$sql = "select * from user where email='{$email}';";
$result = mysqli_query( $conn, $sql );

$row = mysqli_fetch_array($result);
$DBpassword = $row['password'];

if ($password == $DBpassword) {
    // 로그인 성공
    session_cache_expire(36000);
    session_start();

    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];

    //print_r($_SESSION);
    //echo $_SESSION['login'];
   
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
    </script>
<?php
    header("location: /index.php");
} else {
    // 로그인 실패 
?>
    <script>
        alert("로그인에 실패하였습니다");
    </script>
<?php
    header("location: /login/login.php");
}
?>