<div class="modal" id="cameraModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Camera</h4>
        <button type="button" class="close" onclick="cameraModal()">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id = "outer-wrap">
            <video autoplay="true" id="videoElement2">
            </video>

            <div id = "layer-3">
              <div class = "dot-wrapper">
                <div class = "dot"></div>
              </div>
            </div>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        
        <button type="button" class="btn btn-success" onclick= "cameraModal()">Save Picture</button>
      </div>

    </div>
  </div>
</div>
