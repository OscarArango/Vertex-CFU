<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');

    $sql = "SELECT
    A.ID,
	I.AssetType,
    I.AssetTypeIcon,
    A.AssetTitle,
    B.TopicType,
	A.AssetURL,
    T.TrainingPhase,
    A.Created
    FROM tblAssets A
    Inner JOIN tblAssetsType I ON I.AssetTypeID = A.AssetTypeID
    Inner JOIN tblTrainingPhase T ON T.TrainingPhaseID = A.TrainingPhaseID
    Inner JOIN tblTopics B ON B.TopicID = A.TopicID
    ORDER BY AssetTitle";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<table id='publictable'>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td class='tblicon'>
                    <img src=".$row['AssetTypeIcon']." />
                </td>
                <td class='tbllink'>
                    <a href=".$row['AssetURL']." class='tblanchor' target='_blank'>
                        <span class='tblspan'>".$row['AssetTitle']."</span>
                    </a>
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
