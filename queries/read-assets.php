<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');

    $sql = "SELECT
    A.ID,
	I.AssetType,
    A.AssetTitle,
    B.TopicType,
	A.AssetURL,
    T.TrainingPhase,
    A.Created
    FROM tblAssets A
    Inner JOIN tblAssetsType I ON I.AssetTypeID = A.AssetTypeID
    Inner JOIN tblTrainingPhase T ON T.TrainingPhaseID = A.TrainingPhaseID
    Inner JOIN tblTopics B ON B.TopicID = A.TopicID";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<div class='table-responsive'>
            <table id='myTable' class='display table' width='100%' >
                <thead>  
                    <tr>   
                        <th>Asset Title</th>
                        <th>Topic</th>
                        <th>Asset URL</th>
                        <th>Training Phase</th>
                        <th>Asset Type</th> 
                        <th>Created</th>
                        <th></th>
                    </tr>  
                </thead>
                <tbody>
            ";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row['AssetTitle']."</td>
                <td>".$row['TopicType']."</td>
                <td><a href='".$row['AssetURL']."' target='_blank'>".$row['AssetURL']."</a></td>
                <td>".$row['TrainingPhase']."</td>
                <td>".$row['AssetType']."</td>
                <td width='83px'>".$row['Created']."</td>
                <td width='100px'>
                    <button class='edit' data-toggle='modal' data-target='#myModal3' data-id='".$row['ID']."'></button>
                    <button class='btnDelete delete' value='".$row['ID']."'></button>
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
