<?php 
    require '../config.php'; ?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Vertex</title>
        <link href="/css/variables.less " rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>

        <!-- Custom styles for this template -->
        <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
    </head>
    <body style="margin-bottom: 0 !important;">
        <!-- Begin page content -->
        
        <!-- Begin DB Query -->
        <?php
            include (APP_INCLUDE_PATH . '/connection.php');

            $sql = "SELECT * FROM tblKeyResources WHERE ResourceID =".$_GET['id'];

            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)):;
        ?>
        <form action="../queries/update-keyresource-record.php" method="post">
            <div class="form-group row">
                <input type="hidden" name="resourceID" value="<?php echo $row[0]; ?>">
                <label for="AssetTitle" class="col-sm-2 col-form-label">Resource</label>
                <div class="col-sm-10">
                    <input name="resourceTitle" type="text" class="form-control" id="k_title" value="<?php echo $row[1]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="mr-sm-2" for="resourceURL">Resource URL</label>
                <input type="text" name="resourceURL"  class="form-control" id="a_resourceURL" value="<?php echo $row[3]; ?>">
            </div>
            <div class="form-group row">
                <label for="AssetURL" class="col-sm-2 col-form-label">Resource Description</label>
                <div class="col-sm-10">
                    <!--<input name="resourceDescription" type="text" class="form-control" id="k_description" value="<?php echo $row[2]; ?>">-->
                    <textarea name="resourceDescription" class="form-control" rows="5" id="k_description"><?php echo $row[2]; ?></textarea>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <input type="submit" name="submit" value="Save changes" class="btn btn-primary" />
            </div>
        </form>
        <?php endwhile; ?>
        
    </body>
</html>