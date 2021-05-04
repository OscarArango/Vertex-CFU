<?php 
  require '../config.php'; ?>

  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add New Learning Asset</h4>
                <a href="/admin/keyresource-managment.php">Need to add a Key Resource instead?</a>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="form" action="/queries/insert-new-asset.php" method="post">
                    <div class="form-group">
                        <label class="mr-sm-2" for="AssetTitle">Asset Name</label>
                        <input type="text" name="title"  class="form-control" id="a_title" placeholder="Asset name">
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="AssetURL">Asset URL</label>
                        <input name="url" type="url" class="form-control" id="a_url" placeholder="Asset URL">
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="AssetTypeID">Asset Type</label>
                        <?php
                            include (APP_INCLUDE_PATH . '/connection.php');
                            $sql = "SELECT AssetTypeID, AssetType FROM tblAssetsType";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <select name="assettype" class="custom-select">
                            <option selected disabled="disabled">Select an Asset Type</option>
                            <?php while($row = mysqli_fetch_array($result)):; ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="AssetType">Topic</label>
                        <?php
                            include (APP_INCLUDE_PATH . '/connection.php');
                            $sql = "SELECT TopicID, TopicType FROM tblTopics";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <select name="topic" class="custom-select">
                            <option selected disabled="disabled">Select a Topic</option>
                            <?php while($row = mysqli_fetch_array($result)):; ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="TrainingPhase">Training Phase</label>
                        <?php
                            include (APP_INCLUDE_PATH . '/connection.php');
                            $sql = "SELECT TrainingPhaseID, TrainingPhase FROM tblTrainingPhase";
                            $result = mysqli_query($conn, $sql);
                        ?>
                        <select name="trainingPhase" class="custom-select">
                            <option selected disabled="disabled">Select a Training Phase</option>
                            <?php while($row = mysqli_fetch_array($result)):; ?>
                            <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <!--<div class="form-group">
                        <a href="#" data-toggle="modal" data-target="#myModal5">Need a New Topic?</a>
                    </div>-->
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button onclick="form_submit()" type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>