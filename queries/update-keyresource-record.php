<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');
 
    // Escape user inputs for security
    
    $keyResource_ID = mysqli_real_escape_string($conn, $_POST['resourceID']);
    $keyResource_title = mysqli_real_escape_string($conn, $_POST['resourceTitle']);
    $keyResource_Desc = mysqli_real_escape_string($conn, $_POST['resourceDescription']);
    $Resource_URL = mysqli_real_escape_string($conn, $_POST['resourceURL']);
    
    // attempt insert query execution
    $sql = "UPDATE tblKeyResources SET Resource='".$keyResource_title."', Description='".$keyResource_Desc."', url='".$Resource_URL."', Updated=now() where ResourceID=$keyResource_ID";
    if(mysqli_query($conn, $sql)){
        echo "Records Updated successfully.";
        //header('Location: /admin/keyresource-managment.php');
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
    
    // close connection
    mysqli_close($conn);
?>