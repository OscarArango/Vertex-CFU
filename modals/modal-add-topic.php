<?php 
  require '../config.php'; ?>

  <!-- Modal -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="height: 600px;">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add New Topic</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="formAddTopic" action="/queries/insert-new-topic.php" method="post">
                    <div class="form-group">
                        <label class="mr-sm-2" for="Topicname">Topic Name</label>
                        <input type="text" name="topic"  class="form-control" id="a_topic" placeholder="Topic Name">
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button onclick="form_submitTopics()" type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>