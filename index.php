<?php include "includes/header.php" ?>


<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class = "icon-large">
                <i class="bi bi-map-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                New Survey
            </button>
            <button type="button" class="btn btn-outline-primary  btn-lg btn-block" data-toggle="modal" data-target="#exampleModal2">
                Load Survey
            </button>
            <a class="btn btn-primary btn-lg btn-block" href= "oldsurvey.php">Resume Latest Survey</a>
        </div>
    </div>
</div>


<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class = "icon-large">
                <i class="bi bi-gear-fill"></i>
            </div>
            <br>
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" >
                Settings
            </button>
        </div>
    </div>
</div>

<!-- Button trigger modal -->




<?php include "includes/components/modals/newsurveyfile.php" ?>
<?php include "includes/components/modals/loadsurveyfile.php" ?>


<?php include "includes/footer.php" ?>