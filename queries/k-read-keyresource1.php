<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');

    $sql = "SELECT *
            FROM tblKeyResources
            ORDER BY ResourceID DESC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<table id='publictable'>
            ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td class='tbllink' style='padding: 0 15px;'><a href='".$row['url']."' target='_blank'>".$row['Resource']."</a></td>
                <td class='tbllink' style='padding: 0 15px;'>".$row['Description']."</td>
                <td class='tbllink' style='padding: 0 15px;'>".$row['url']."</td>
              </tr>
        ";
    }
    echo "</table>";
    } else {
    echo "0 results";
    }
    $conn->close();
?>