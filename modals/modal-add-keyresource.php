<?php 
  require '../config.php'; ?>

  <!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Add New Key Resource</h4>
                <a href="/admin/asset-managment.php">Need to add a Learning Asset instead?</a>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="formKeyresources" action="/queries/insert-new-keyresource.php" method="post">
                    <div class="form-group">
                        <label class="mr-sm-2" for="resourceTitle">Resource Name</label>
                        <input type="text" name="resourceTitle"  class="form-control" id="a_resourceTitle" placeholder="Resource Name...">
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="resourceURL">Resource URL</label>
                        <input type="text" name="resourceURL"  class="form-control" id="a_resourceURL" placeholder="Resource URL...">
                    </div>
                    <div class="form-group">
                        <label class="mr-sm-2" for="ResourceDescription">Resource Description</label>
                        <textarea name="resourceDescription" class="form-control" rows="5" id="a_resourceDescription"></textarea>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--<input type="submit" name="submit" value="Submit" class="btn btn-primary" />-->
                <button onclick="form_submitKeyresources()" type="submit" name="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>