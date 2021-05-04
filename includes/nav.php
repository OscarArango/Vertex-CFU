<?php

    $currentPath = $_SERVER['REQUEST_URI'];
    $adminAsset = '/admin/asset-managment.php';
    $adminResource = '/admin/keyresource-managment.php';


    if ($currentPath == $adminAsset) {
        $assetNav = "showme";
        $resourceNav = "hideme";
    } else if ($currentPath == $adminResource) {
        $assetNav = "hideme";
        $resourceNav = "showme";
    }
?>

<nav class="navbar navbar-light navbar-static-top bg-faded <?php echo $assetNav; ?>" style="border-radius: 0; padding: 20px 10px;">
    <div class="container">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-expanded="false" aria-controls="exCollapsingNavbar2" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <img src="/img/CSuniversityLogo_RGB.png" class="left img-responsive" style="max-width: 25%; height: auto;">
            <ul class="nav navbar-nav right">
                <li class="nav-item">
                    <a href="/admin/asset-managment.php" class="admin-asset-nav-link-active"></a>
                </li>
                <li class="nav-item">
                    <a href="/admin/keyresource-managment.php" class="admin-resource-nav-link"></a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-static-top bg-faded <?php echo $resourceNav; ?>" style="border-radius: 0; padding: 20px 10px;">
    <div class="container">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2" aria-expanded="false" aria-controls="exCollapsingNavbar2" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
            <img src="/img/CSuniversityLogo_RGB.png" class="left img-responsive" style="max-width: 25%; height: auto;">
            <ul class="nav navbar-nav right">
                <li class="nav-item">
                    <a href="/admin/asset-managment.php" class="admin-asset-nav-link"></a>
                </li>
                <li class="nav-item">
                    <a href="/admin/keyresource-managment.php" class="admin-resource-nav-link-active"></a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
</nav>