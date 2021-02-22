<?php
$email = $_POST["email"];
$password=$_POST['password'];
$name = $_POST["name"];

$conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' ) ;
$sql = "insert into user (email, password, name) values ('{$email}', '{$password}', '{$name}')";

$result = mysqli_query( $conn, $sql );

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "./login.php";
    </script>
<?php
}
?>