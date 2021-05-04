<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');

    $sql = "SELECT *
            FROM tblKeyResources
            ORDER BY ResourceID DESC";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<div class='table-responsive'>
            <table id='myTable2' class='display table' width='100%' >
                <thead>  
                    <tr> 
                        <th>Resource</th>  
                        <th>Description</th>
                        <th>URL</th>
                        <th>Created</th>
                        <th></th>
                    </tr>  
                </thead>
                <tbody>
            ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['Resource']."</td>
                <td>".$row['Description']."</td>
                <td><a href='".$row['url']."' target='_blank'>".$row['url']."</a></td>
                <td>".$row['Created']."</td>
                <td width='100px'>
                    <button class='edit' data-toggle='modal' data-target='#myModal4' data-id='".$row['ResourceID']."'></button>
                    <button class='btnKeyresourceDelete delete' value='".$row['ResourceID']."'></button>
                </td>
            </tr>
        ";
    }
    echo "</tbody></table></div>";
    } else {
    echo "0 results";
    }
    $conn->close();
?>