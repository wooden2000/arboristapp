
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt-fill"></i>New Observation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>November 1st, 2021, 13:05:10AST</p>
        <form class="form-inline">
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Species</option>
                <option>Maple</option>
                <option>Birch</option>
                <option>Elder</option>
                <option>Oak</option>
                <option>Birch</option>
                </select>
            </div>

            <div class="input-group mb-3">
               
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-rulers"></i></a></span>
                </div>
                <input type="text" class="form-control" placeholder="Height" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-rulers"></i></a></span>
                </div>
                <input type="text" class="form-control" placeholder="Diameter" aria-label="Username" aria-describedby="basic-addon1">

            </div>

            <div class="input-group mb-3">
               
               <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-rulers"></i></a></span>
               </div>
               <input type="text" class="form-control" placeholder="Aspect" aria-label="Username" aria-describedby="basic-addon1">

               <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-rulers"></i></a></span>
               </div>
               <input type="text" class="form-control" placeholder="Slope" aria-label="Username" aria-describedby="basic-addon1">

           </div>


            <label class="sr-only" for="inlineFormInputName2">Damage Condition</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Damage Condition">

            <label class="sr-only" for="inlineFormInputName2">Notes</label>
            <input type="textarea" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Notes">


        </form>
        
        <div id="map2"></div>

        <form>
            <div class="input-group mb-3">
                
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#">Lat.</a></span>
                </div>
                <input type="text" class="form-control" placeholder="0.0000" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2">Long.</a></span>
                </div>
                <input type="text" class="form-control" placeholder="0.0000" aria-label="Username" aria-describedby="basic-addon1">

            </div>
        </form>
        <button type="button" class="btn btn-outline-primary  btn-lg btn-block" data-toggle="modal" data-target="#exampleModal3">
            <i class="bi bi-camera"></i> Photograph
            </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary " data-dismiss="modal">Add Observation</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="exampleModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Clinometer</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Point your camera at the bottom of the tree and click the red button. Then slew your camera to the top of the tree and click the button again.
        <br>
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
        </div>

        <div class = "dot-wrapper">
            <div class = "dot"></div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        
        Calculated height: ____m <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
      </div>

    </div>
  </div>
</div>




<div class="modal" id="exampleModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Camera</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id = "outer-wrap">
            <video autoplay="true" id="videoElement2">
            </video>
        </div>

        <div class = "dot-wrapper">
            <div class = "dot"></div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        
        <button type="button" class="btn btn-success" data-dismiss="modal">Save Picture</button>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="tableModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-pencil"></i> Edit Cell</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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