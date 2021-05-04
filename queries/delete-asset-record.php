<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');
    
    // attempt delete query
    $sql = "DELETE FROM tblAssets WHERE ID =".$_GET['id'];

    if(mysqli_query($conn, $sql)){
        //back to Asset Managment page
        header('Location: /admin/asset-managment.php');
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
    
    // close connection
    mysqli_close($conn);
?>