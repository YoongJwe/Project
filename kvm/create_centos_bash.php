<?php
    $name = $_POST["name"];
    $cpu = $_POST["cpu"];
    $ram = $_POST["ram"];
    $disk = $_POST["disk"];
    $network = $_POST["network"];
    $ram = $ram * 1024;


    exec("sudo sh /project/web/web_create_centos.sh $name $cpu $ram $disk $network");
    echo "<script>location.href='view_instance_list.php'</script>";
?>
