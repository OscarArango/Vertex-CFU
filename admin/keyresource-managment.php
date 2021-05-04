<?php 
  require '../config.php';
  include (APP_INCLUDE_PATH . '/header.php'); ?>
  
<!-- Begin page content -->
<div class="container">
  <div class="col-md-12" style="margin-top: 3rem;">
    <div class="col-md-10" style="padding: 0;">
      <h1>Key Resource Management</h1>
    </div>
    <div class="col-md-2" style="padding: 0; height: 52px; border-bottom: 1px solid #458DDA;">
      <ul class="nav navbar-nav right">
          <li>
              <a class="nav-link" data-toggle="modal" data-target="#myModal2">
                <img src="../admin/adminimg/btn_keyresource.png" style="height: 35px; cursor: pointer;">
              </a>
          </li>
      </ul>
    </div>



    
  </div>
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 15px;">
      <!-- Begin DB Query -->
      <?php include (APP_QUERY_PATH . '/read-keyresource.php');?>
    </div>
  </div>
</div>

<?php include (APP_MODAL_PATH . '/modal-add-keyresource.php');?>

<?php include (APP_MODAL_PATH . '/modal-update-keyresource.php');?>

<?php include (APP_INCLUDE_PATH . '/footer.php');?>