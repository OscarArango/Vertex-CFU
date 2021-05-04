<?php
    require '../config.php';
    include (APP_INCLUDE_PATH . '/connection.php');
 
    // Escape user inputs for security
    $Topic_name = mysqli_real_escape_string($conn, $_POST['topic']);
    
    // attempt insert query execution
    $sql = "INSERT INTO tblTopics (TopicType, Created) 
    VALUES ('$Topic_name', now())";

    if(mysqli_query($conn, $sql)){
        //echo "Records added successfully.";
        header('Location: /admin/asset-managment.php');
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
    
    // close connection
    mysqli_close($conn);
?>