<?php 
  require '../config.php';
  include (APP_INCLUDE_PATH . '/headerpublic.php'); ?>

<nav id="nav" class="navbar navbar-light navbar-static-top bg-faded" style="border-radius: 0; padding: 20px 10px;">
        <div class="container">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-expanded="false" aria-controls="exCollapsingNavbar2" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
                <img src="/img/CSuniversityLogo_RGB.png" class="left img-responsive" style="max-width: 25%; height: auto;">
                <ul class="nav navbar-nav right">
                    <li class="nav-item" id="first">
                        <a href="/overview.php" class="nav-link"></a>
                    </li>
                    <li class="nav-item" id="second">
                        <div class="dropdown">
                            <a class="nav-link active2" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu u01">
                                <li><a href="/public/view-all.php" style="color: #761fa3 !important; font-weight: 700;">View All Assets</a></li>
                                <li><a href="t-overview-of-vertex.php">Overview of Vertex</a></li>
                                <li><a href="t-disease-state.php">Disease State</a></li>
                                <!-- <li><a href="t-clinical-research.php">Clinical Research</a></li> -->
                                <li><a href="t-biostatistics.php">Biostatistics</a></li>
                                <li><a href="t-kalydeco.php">ivacaftor</a></li>
                                <li><a href="t-orkambi.php">lumacaftor</a></li>
                                <li><a href="t-tezacaftor.php">tezacaftor</a></li>
                                <li><a href="t-next-gen.php">Next Gen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="third">
                        <div class="dropdown">
                            <a class="nav-link" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu u01">
                                <li><a href="/public/view-all.php" style="color: #761fa3 !important; font-weight: 700;">View All Assets</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-eLearn.png" style="height: 35px"></div><a href="a-elearning.php">eLearning</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-pdf.png" style="height: 35px"></div><a href="a-pdf.php">PDF</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-vid.png" style="height: 35px"></div><a href="a-video.php">Video</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-slideDeck.png" style="height: 35px"></div><a href="a-slide-deck.php">Slide Deck</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-clinStudy.png" style="height: 35px"></div><a href="a-clinical-study.php">Clinical Study</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="fourth">
                        <div class="dropdown">
                            <a class="nav-link" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu u01" style="height: 100px;">
                                <li><a href="p-onboarding.php">Onboarding</a></li>
                                <li><a href="p-continuing-education.php">Continuing Education</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="fifth">
                        <a class="nav-link" style="height: 50px;" href="k-keyresource.php"></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
</div>

<!-- Begin page content -->
<div class="container">
  <div class="mt-3" style="margin-top: 3rem;">
    <h1>All Assets</h1>
  </div>
  <!-- Begin DB Query -->
  <?php include (APP_QUERY_PATH . '/usr-read-assets.php');?>
</div>

<?php include (APP_INCLUDE_PATH . '/footer.php');?>