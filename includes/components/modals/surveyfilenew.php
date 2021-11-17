
<!-- Modal -->
<div class="modal fade" id="newSurveyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-file-earmark-plus"></i> New Tree Survey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02"><i class="bi bi-folder2-open"></i>
File Path</label>
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
            
            <hr>
            <h6>Coordinate System</h6>

            <div class="btn-group">
                <button class="btn btn-outline-dark btn-sm dropdown-toggle menu-dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CRS (WGS84)
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">WGS84</a>
                <a class="dropdown-item" href="#">NAD83 CSRS</a>
                <a class="dropdown-item" href="#">Clarke 1878</a>
                </div>
            </div>

            <div class="btn-group">
                <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Datum (NAVD)
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#">CGVD</a>
                <a class="dropdown-item" href="#">NAVD</a>
                </div>
            </div>

            <p></p>
            <hr>
            <h6>Save to:</h6>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Device
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
              <label class="form-check-label" for="flexCheckChecked">
                Cloud
              </label>
            </div>
            
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href = "newsurvey.php">Create New Survey</a>
      </div>
    </div>
  </div>
</div>



