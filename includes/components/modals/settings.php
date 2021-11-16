<div class="modal fade" onclick ="settingsModal()" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear-fill"></i> Settings</h5>
          <button type="button" class="close" aria-label="Close" onclick="editCellModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="recipient-name" placeholder="#.##">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Change</button>
        </div>
      </div>
    </div>
  </div>
</div>