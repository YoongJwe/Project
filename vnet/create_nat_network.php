<?php
    $network = $_POST['network'];
    $bridge = $_POST['bridge'];
    $ip = $_POST['ip'];
    if ($network != "" && $bridge != "" && $ip != "") {
      exec("sudo sh /project/web/web_create_nat.sh $network $bridge $ip");
    }
    echo "<script>location.href='view_network_list.php'</script>";
?>