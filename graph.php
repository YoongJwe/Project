<?php
    $conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' ) ;
    $sqlForCpu = "select per, time from cpu order by idx desc limit 5;";
    $sqlForMemory = "select per from memory order by idx desc limit 5;";
    $sqlForDisk = "select per from disk order by idx desc limit 5;";

    $resultForCpu = mysqli_query( $conn, $sqlForCpu );
    $resultForMemory = mysqli_query( $conn, $sqlForMemory );
    $resultForDisk = mysqli_query( $conn, $sqlForDisk );


    // echo " $result";
    echo "<div class='graph-data-cpu'>";
    while($row = mysqli_fetch_array($resultForCpu)) {           
    echo "<dl>";
    echo "<dt>" . $row['per'] . "</dt>";
    echo "<dd>" . $row['time'] . "</dd>";
    echo "</dl>";
    }
    echo "</div>";

    echo "<ul class='graph-data-memory'>";
    while($row2 = mysqli_fetch_array($resultForMemory)) {           
    echo "<li>" . $row2['per'] . "</li>";
    }
    echo "</ul>";

    echo "<ul class='graph-data-disk'>";
    while($row3 = mysqli_fetch_array($resultForDisk)) {           
    echo "<li>" . $row3['per'] . "</li>";
    }
    echo "</ul>";
?>