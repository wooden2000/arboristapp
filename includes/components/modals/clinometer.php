
<div class="modal" id="clinometerModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Clinometer</h4>
        <button type="button" class="close" onclick ="clinometerModal()">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form-inline">
        <div class="form-group narrow-form">
            <label for="points">Distance to tree:</label>
            <input type="number" id="points" name="points" step="1"> metres
        </div>
        </form>

        <div id = "outer-wrap">
            <video autoplay="true" id="videoElement">
        
            </video>
            <div id = "layer-1"></div>
            <div id = "layer-2"></div>

            <div id = "layer-3">
              <div class = "dot-wrapper">
                <div class = "dot"></div>
              </div>
            </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer"> 
        <form class="form-inline">
        <div class="form-group narrow-form">
            <label for="points">Height:</label>
            <input type="number" id="points" name="points" step="1"> metres
            <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
        </div>
        </form> 

        <p></p>
        <h5 >About</h5>
        <p>Point your camera at the bottom of the tree and click the red button. Then slew your camera to the top of the tree and click the button again.</p>
        
        <p>
        <div class = "animation-wrapper">
          <div class ="animation">
            <?php include "includes/components/animations/angles.php" ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>