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

            $sql = "SELECT * FROM tblAssets WHERE ID =".$_GET['id'];

            $result = mysqli_query($conn, $sql);
            while($test = mysqli_fetch_array($result)):;
        ?>
        <form action="../queries/update-asset-record.php" method="post">
            <div class="form-group row">
                <input type="hidden" name="assetID" value="<?php echo $test[0]; ?>">
                <label for="AssetTitle" class="col-sm-2 col-form-label">Asset Name</label>
                <div class="col-sm-10">
                    <input name="title" type="text" class="form-control" id="a_title" value="<?php echo $test[5]; ?>">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="AssetURL" class="col-sm-2 col-form-label">Asset URL</label>
                <div class="col-sm-10">
                    <input name="url" type="text" class="form-control" id="a_url" value="<?php echo $test[6]; ?>">
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="AssetTypeID" class="col-sm-2 col-form-label">Asset Type</label>
                <div class="col-sm-10">
                    <?php
                        $sql = "SELECT AssetTypeID, AssetType FROM tblAssetsType";
                        $result = mysqli_query($conn, $sql);
                    ?>
                    <select name="assettype" class="custom-select">
                        <?php while($row = mysqli_fetch_array($result)):; ?>
                        <option value="<?php echo $row[0]; ?>" <?php if ($row[0] == $test[3]) echo "selected='selected'";?> ><?php echo $row[1]; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="AssetType" class="col-sm-2 col-form-label">Topic</label>
                <div class="col-sm-10">
                    <?php
                        $sql = "SELECT TopicID, TopicType FROM tblTopics";
                        $result = mysqli_query($conn, $sql);
                    ?>
                    <select name="topic" class="custom-select">
                        <?php while($row = mysqli_fetch_array($result)):; ?>
                        <option value="<?php echo $row[0]; ?>" <?php if ($row[0] == $test[1]) echo "selected='selected'";?> ><?php echo $row[1]; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="TrainingPhase" class="col-sm-2 col-form-label">Training Phase</label>
                <div class="col-sm-10">
                    <?php
                        $sql = "SELECT TrainingPhaseID, TrainingPhase FROM tblTrainingPhase";
                        $result = mysqli_query($conn, $sql);
                    ?>
                    <select name="trainingPhase" class="custom-select">;
                        <?php while($row = mysqli_fetch_array($result)):; ?>
                        <option value="<?php echo $row[0]; ?>" <?php if ($row[0] == $test[2]) echo "selected='selected'";?> ><?php echo $row[1]; ?></option>
                        <?php endwhile; ?>
                    </select>
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