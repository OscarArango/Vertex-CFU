<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');
 
    // Escape user inputs for security
    $Asset_title = mysqli_real_escape_string($conn, $_POST['title']);
    $Asset_url = mysqli_real_escape_string($conn, $_POST['url']);
    $Assettype_id = mysqli_real_escape_string($conn, $_POST['assettype']);
    $Topic_id = mysqli_real_escape_string($conn, $_POST['topic']);
    $TrainingPhase_id = mysqli_real_escape_string($conn, $_POST['trainingPhase']);
    
    // attempt insert query execution
    $sql = "INSERT INTO tblAssets (TopicID, TrainingPhaseID, AssetTypeID, AssetTitle, AssetURL, Created) 
    VALUES ('$Topic_id', '$TrainingPhase_id', '$Assettype_id', '$Asset_title', '$Asset_url', now())";

    if(mysqli_query($conn, $sql)){
        //echo "Records added successfully.";
        header('Location: /admin/asset-managment.php');
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
    
    // close connection
    mysqli_close($conn);
?>