<?php require 'config.php';?>

<?php include (APP_INCLUDE_PATH . '/headerpublic.php');?>

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
                            <a class="nav-link" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu u01">
                                <li><a href="/public/view-all.php" style="color: #761fa3 !important; font-weight: 700;">View All Assets</a></li>
                                <li><a href="/public/t-overview-of-vertex.php">Overview of Vertex</a></li>
                                <li><a href="/public/t-disease-state.php">Disease State</a></li>
                                <li><a href="/public/t-clinical-research.php">Clinical Research</a></li>
                                <li><a href="/public/t-biostatistics.php">Biostatistics</a></li>
                                <li><a href="/public/t-kalydeco.php">ivacaftor</a></li>
                                <li><a href="/public/t-orkambi.php">lumacaftor</a></li>
                                <li><a href="/public/t-tezacaftor.php">tezacaftor</a></li>
                                <li><a href="/public/t-next-gen.php">Next Gen</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="third">
                        <div class="dropdown">
                            <a class="nav-link" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu u01">
                                <li><a href="/public/view-all.php" style="color: #761fa3 !important; font-weight: 700;">View All Assets</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-eLearn.png" style="height: 35px"></div><a href="/public/a-elearning.php">eLearning</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-pdf.png" style="height: 35px"></div><a href="/public/a-pdf.php">PDF</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-vid.png" style="height: 35px"></div><a href="/public/a-video.php">Video</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-slideDeck.png" style="height: 35px"></div><a href="/public/a-slide-deck.php">Slide Deck</a></li>
                                <li><div class="left" style="width: 75px; text-align: center; margin-top: 7px;"><img src="/img/ico-clinStudy.png" style="height: 35px"></div><a href="/public/a-clinical-study.php">Clinical Study</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="fourth">
                        <div class="dropdown">
                            <a class="nav-link" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu u01" style="height: 100px;">
                                <li><a href="/public/p-onboarding.php">Onboarding</a></li>
                                <li><a href="/public/p-continuing-education.php">Continuing Education</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item" id="fifth">
                        <a class="nav-link" style="height: 50px;" href="/public/k-keyresource.php"></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
</div>

<!-- Begin page content -->
<div class="bluebar">
    <!--<img src="img/bluebar.png" style="display: block; margin: 90.19px auto;" class="img-responsive"/>-->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/lungs.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-6">
            <h1 class="display-3" style="color: #468AC7;">Welcome</h1>
            <p style="color: #468AC7;">
                Welcome to CF University! Here, you'll find the courses and resources that you need to learn about cystic fibrosis, its treatment, clinical research, and our investigational compounds and products.
            </p>
            <p style="color: #468AC7;">
                The tabs at the top of the screen allow you to quickly search for these materials by topic, type of learning asset, or where you are in the training process. You will also find important references in the Key Resources tab, such as associated readings and resources for each module, slide decks, and links to training recordings and journal clubs.
            </p>
            <p style="color: #468AC7;">
                We encourage you to explore, study, and enjoy! 
            </p>
        </div>
    </div>
</div>

<?php include (APP_INCLUDE_PATH . '/footer.php');?>
