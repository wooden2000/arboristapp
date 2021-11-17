<!-- Open File Modal -->
<div class="modal fade" id="openSurveyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-file-earmark-arrow-up"></i>Open Survey</h5>
        <button type="button" class="close" onclick = "openFileModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Open Cloud File</h6>
        <button type="button" class="btn btn-primary" >Open Cloud File</button>
        <hr>
        <h6>Choose File Path </h6>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02"><i class="bi bi-folder2-open"></i> File Path</label>
            </div>
        </div>

        <hr>
        <h6>Open Recent</h6>
          
        <div class = "card file-box">
          <i class="bi bi-file-earmark"></i>
          <p>survey.csv</p>
        </div>

        <div class = "card file-box">
          <i class="bi bi-file-earmark"></i>
          <p>survey.csv</p>
        </div>

        <div class = "card file-box">
          <i class="bi bi-file-earmark"></i>
          <p>survey.csv</p>
        </div>

      </div>
      <div class="modal-footer">
        <a href = "editsurvey.php"><button type="button" class="btn btn-primary" >Load</button></a>
      </div>
    </div>
  </div>
</div>
