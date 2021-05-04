<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');
 
    // Escape user inputs for security
    $Resource_title = mysqli_real_escape_string($conn, $_POST['resourceTitle']);
    $Resource_Description = mysqli_real_escape_string($conn, $_POST['resourceDescription']);
    $Resource_URL = mysqli_real_escape_string($conn, $_POST['resourceURL']);
    
    // attempt insert query execution
    $sql = "INSERT INTO tblKeyResources (Resource, Description, url, Created) 
    VALUES ('$Resource_title', '$Resource_Description', '$Resource_URL', now())";

    if(mysqli_query($conn, $sql)){
        //echo "Records added successfully.";
        header('Location: /admin/keyresource-managment.php');
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
    
    // close connection
    mysqli_close($conn);
?>