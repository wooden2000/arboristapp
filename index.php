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
            <button type="button" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">
                New Survey
            </button>
            <button type="button" class="btn btn-outline-primary  btn-lg btn-block" data-toggle="modal" data-target="#exampleModal2">
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
        <h5 class="modal-title" id="exampleModalLabel">New Tree Survey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">File Path</label>
            </div>
        </div>


        <form class="form-inline">
        <div class="form-group">
            <label for="inputPassword6">File Name</label>
            <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    .csv
                </label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    .xls
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                <label class="form-check-label" for="flexRadioDefault3">
                    .txt
                </label>
            </div>
            
            <br>
            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CRS (WGS84)
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">WGS84</a>
                <a class="dropdown-item" href="#">NAD83 CSRS</a>
                <a class="dropdown-item" href="#">Clarke 1878</a>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Datum (NAVD)
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">CGVD</a>
                <a class="dropdown-item" href="#">NAVD</a>
                </div>
            </div>
            
        </div>
        </form>





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
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02">File Path</label>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php include "includes/footer.php" ?>