<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');
 
    // Escape user inputs for security
    $Asset_ID = mysqli_real_escape_string($conn, $_POST['assetID']);
    $Asset_title = mysqli_real_escape_string($conn, $_POST['title']);
    $Asset_url = mysqli_real_escape_string($conn, $_POST['url']);
    $Assettype_id = mysqli_real_escape_string($conn, $_POST['assettype']);
    $Topic_id = mysqli_real_escape_string($conn, $_POST['topic']);
    $TrainingPhase_id = mysqli_real_escape_string($conn, $_POST['trainingPhase']);
    
    // attempt insert query execution
    $sql = "UPDATE tblAssets SET TopicID='".$Topic_id."', TrainingPhaseID='".$TrainingPhase_id."', AssetTypeID='".$Assettype_id."', AssetTitle='".$Asset_title."', AssetURL='".$Asset_url."', Updated=now() where ID=$Asset_ID";

    if(mysqli_query($conn, $sql)){
        echo "Records Updated successfully.";
        //header('Location: /admin/asset-managment.php');
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
    
    // close connection
    mysqli_close($conn);
?>