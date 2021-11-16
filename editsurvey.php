<?php include "includes/header.php" ?>

<div class = "row">
<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="bi bi-map-fill"></i> Map</h4>
            <div id="map"></div>
        </div>
    </div>
</div>

<div class = "col-sm-12">
    <div class="card button-card">
        <div class="card-body">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">New Observation <i class="bi bi-geo-alt-fill"></i></button>
        </div>
    </div>
</div>




<div class = "col-sm-12">
    <div class="card point-list">
        <div class="card-body">
            <h4><i class="bi bi-geo-alt-fill"></i> Observations</h4>
            <div class = "table-wrap">        
                <table id = "pointTable" class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Species</th>
                        <th>Diam.</th>
                        <th>Height</th>
                        <th>Age</th>
                        <th>Aspect</th>
                        <th>Slope</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class = "presshold">4</td>
                        <td class = "presshold">Elm</td>
                        <td class = "presshold">2.00</td>
                        <td class = "presshold">5.50</td>
                        <td class = "presshold">10.00</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">2</td>
                        <td class = "presshold">Birch</td>
                        <td class = "presshold">3.00</td>
                        <td class = "presshold">3.50</td>
                        <td class = "presshold">7.00</td>
                        <td class = "presshold">flat</td>
                        <td class = "presshold">null</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">3</td>
                        <td class = "presshold">Birch</td>
                        <td class = "presshold">3.00</td>
                        <td class = "presshold">3.00</td>
                        <td class = "presshold">7.00</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">1</td>
                        <td class = "presshold">Maple</td>
                        <td class = "presshold">4.00</td>
                        <td class = "presshold">5.00</td>
                        <td class = "presshold">10.00</td>
                        <td class = "presshold">flat</td>
                        <td class = "presshold">null</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">10</td>
                        <td class = "presshold">Birch</td>
                        <td class = "presshold">10.00</td>
                        <td class = "presshold">20.00</td>
                        <td class = "presshold"></td>
                        <td class = "presshold">South</td>
                        <td class = "presshold">70%</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">6</td>
                        <td class = "presshold">Cherry</td>
                        <td class = "presshold">15.00</td>
                        <td class = "presshold">5.50</td>
                        <td class = "presshold"></td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">7</td>
                        <td class = "presshold">Cherry</td>
                        <td class = "presshold">20.00</td>
                        <td class = "presshold">4.50</td>
                        <td class = "presshold"></td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">9</td>
                        <td class = "presshold">Cherry</td>
                        <td class = "presshold">20.00</td>
                        <td class = "presshold">5.00</td>
                        <td class = "presshold"></td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">5</td>
                        <td class = "presshold">Cherry</td>
                        <td class = "presshold">25.00</td>
                        <td class = "presshold">4.00</td>
                        <td class = "presshold"></td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    <tr>
                        <td class = "presshold">8</td>
                        <td class = "presshold">Cherry</td>
                        <td class = "presshold">25.00</td>
                        <td class = "presshold">5.00</td>
                        <td class = "presshold"></td>
                        <td class = "presshold">-</td>
                        <td class = "presshold">-</td>
                        <td class = "presshold"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="bi bi-info-circle-fill"></i> Details</h4>
            <p>Started: November 14</p>

            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Atmospheric Pressure</label>
                <input type="text" class="form-control" id="formGroupExampleInput" value="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Another label</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
              </div>
            </form>

        </div>
    </div>
</div>



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
</div>

<script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
</script>

<script>

    

var map = L.map('map').setView([44.668651, -63.570444], 18);
mapLink = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 18,
    }).addTo(map);

var marker = L.marker([44.668349, -63.571144]).addTo(map);
var marker = L.marker([44.668455, -63.570580]).addTo(map);
var marker = L.marker([44.668146, -63.570586]).addTo(map);
var marker = L.marker([44.668268, -63.570408]).addTo(map);
var marker = L.marker([44.668414, -63.570247]).addTo(map);
var marker = L.marker([44.668608, -63.570012]).addTo(map);
var marker = L.marker([44.668651, -63.570444]).addTo(map);
var marker = L.marker([44.668570, -63.570744]).addTo(map);
var marker = L.marker([44.668467, -63.571018]).addTo(map);
var marker = L.marker([44.668334, -63.571265]).addTo(map);



var map2 = L.map('map2').setView([44.668651, -63.570444], 18);
mapLink2 = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink2 + ' Contributors',
    maxZoom: 18,
    }).addTo(map2);

    var marker = L.marker([44.668651, -63.570444]).addTo(map2); 

// Comment out the below code to see the difference.
$('#exampleModal').on('shown.bs.modal', function() {
  map2.invalidateSize();
});

</script>

<?php include "includes/footer.php" ?>

