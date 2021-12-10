<div class="modal fade" id="mocriphoneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></i> Voice Options</h5>
          <button type="button" class="close" aria-label="Close" onclick="mircophoneModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Change</button>
        </div>
      </div>
    </div>
  </div>
</div>