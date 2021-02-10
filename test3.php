<?php
$conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' );
$sql = "SELECT * FROM Virtual_Network;";
$result = mysqli_query( $conn, $sql );
echo "<thead> <tr> <th>NAME</th> <th>UUID</th> <th>BRIDGE</th> <th>NETWORK</th> <th>TYPE</th> <th>WORK</th> </tr></thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result)) {
echo "<tr>";
echo "<td><samp>" . $row['NAME'] . "</samp></td>";
echo "<td><samp>" . $row['UUID'] . "</samp></td>";
echo "<td><samp>" . $row['BRIDGE'] . "</samp></td>";
echo "<td><samp>" . $row['NETWORK'] . "/24</samp></td>";
echo "<td><samp>" . $row['TYPE'] . "</samp></td>";
echo "<td>";
if ($row['NAME'] == "default") {
echo "";
} else {
echo "<button type='submit' class='mb-1 btn btn-sm btn-danger' value=".$row['NAME']." name='name'>Delete</button>";
}
echo "</td>";
echo "</tr>";
}
echo "</tbody>";

                          ?>