<?php include "includes/header.php" ?>


<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class = "icon-large">
                <i class="bi bi-tree-fill"></i>
                <i class="bi bi-tree-fill"></i>
                <i class="bi bi-tree-fill"></i>
                <i class="bi bi-geo"></i>
            </div>
            <br>
            <button type="button" class="btn btn-secondary-outline btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                New Survey
            </button>
            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal2">
                Load Survey
            </button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Resume Latest Survey</button>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Survey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-inline">
        <div class="form-group">
            <label for="inputPassword6">Password</label>
            <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
            <small id="passwordHelpInline" class="text-muted">
            Must be 8-20 characters long.
            </small>
        </div>
    </form>  


    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile02">
            <label class="custom-file-label" for="inputGroupFile02">File path</label>
        </div>
    </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Create New Survey</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Load Survey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php include "includes/footer.php" ?>