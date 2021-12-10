<?php include "includes/header.php" ?>

<div class = "row">
<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class = "icon-large">
                <i class="bi bi-map-fill"></i>
            </div>
            <br>
            <a class="btn btn-primary btn-lg btn-block"  href= "newsurvey.php">
                New Survey
            </a>
            <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="openFileModal()">
                Open Survey
            </button>
            <a class="btn btn-outline-primary btn-lg btn-block" href= "editsurvey.php">Resume Latest Survey</a>
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
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick ="cloudModal()">
                Cloud
            </button>
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
                New Survey
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
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" onclick ="cloudModal()">
                New Observation
            </button>
        </div>
    </div>
</div>
</div>

<script>
    var newUser = 1;
</script>

        
            
            
       

<!-- Button trigger modal -->

<?php include "includes/footer.php" ?>


<script type="text/javascript">
    $('#newUserModal').modal('toggle');
</script>
