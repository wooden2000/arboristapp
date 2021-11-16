<?php include "includes/header.php" ?>

<div class = "row">
<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class = "icon-large">
                <i class="bi bi-map-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#newSurveyModal">
                New Survey
            </button>
            <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="openFileModal()">
                Open Survey
            </button>
            <a class="btn btn-primary btn-lg btn-block" href= "editsurvey.php">Resume Latest Survey</a>
        </div>
    </div>
</div>


<div class = "col-6">
    <div class="card">
        <div class="card-body">
            <div class = "icon-medium">
                <i class="bi bi-gear-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick ="settingsModal()" >
                Settings
            </button>
        </div>
    </div>
</div>

<div class = "col-6">
    <div class="card">
        <div class="card-body">
            <div class = "icon-medium">
                <i class="bi bi-cloud-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" >
                Cloud
            </button>
        </div>
    </div>
</div>

</div>

<!-- Button trigger modal -->



<?php include "includes/footer.php" ?>