<?php include "includes/header.php" ?>

<div class = "row">

<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="bi bi-map-fill"></i> Map</h4>
            <div id="map"></div>
            <p></p>

            <button type="button" class="btn btn-outline-primary" onclick="getLocation()">
                My Position <i class="bi bi-compass"></i> 
            </button>

            <button type="button" id= "mapCenterButton" class="btn btn-primary" onclick="newObservationModal()">
                New Observation<i class="bi bi-geo-alt-fill"></i> 
            </button>
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
                        <th>Damage</th>
                        <th>Notes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class = "presshold"> </td>
                        <td class = "presshold"> </td>
                        <td class = "presshold"> </td>
                        <td class = "presshold"> </td>
                        <td class = "presshold"> </td>
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
            <h4><i class="bi bi-info-circle-fill"></i> Tree Survey Details</h4>


            <form>
            <p><b>Created:</b> November 1st, 2021, 11:00 AST</p>
              <div class="form-group">
                <label for="formGroupExampleInput2"><b>Field Notes:</b></label>
                <textarea class="form-control" id="formGroupExampleInput2" rows="4" placeholder=""></textarea>
              </div>

            </form>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newObservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt-fill"></i>New Observations</h5>
        <button type="button" class="close" onclick="newObservationModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Photos</h6>
        <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="cameraModal()">
            New Photo <i class="bi bi-camera"></i> 
        </button>

        <hr>
        <h6>Classification</h6>
            <form class="form-inline ">
                <div class="form-group side-by-side">
                    <input class="form-control" type="text" list="treeSpecies" placeholder="Species" id = "treeSpecies"/>
                        <datalist id="treeSpecies">
                        <option>Maple</option>
                        <option>Cedar</option>
                        <option>Elm</option>
                        <option>Pine</option>
                        </datalist>
                </div>

                <div class="form-group side-by-side">
                    <select class="form-control" id="exampleFormControlSelect1 ">
                    <option selected>Single Tree</option>
                    <option>Multiple Trees</option>
                    </select>
                </div>

                <label class="sr-only" for="damageCondition">Damage Condition</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id = "damageCondition" placeholder="Damage Condition">

                <label class="sr-only" for="notesTree">Notes</label>
                <input type="textarea" class="form-control mb-2 mr-sm-2" id="notesTree" placeholder="Notes">

                <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="heightTree"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Height" aria-label="Tree Height" aria-describedby="heightTree">

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="diameterTree"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Diameter" aria-label="Tree Diameter" aria-describedby="diameterTree">
                
                </div>
            </form>

        <hr>    
        <h6>Map</h6>
        <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Lat.</span>
                </div>
                
                <input type="text" class="form-control" id = "latitude" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Long.</span>
                </div>

                <input type="text" class="form-control" id = "longitude" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>

        <div id="map2"></div>
        <p></p>
    
        <button type="button" class="btn btn-outline-primary" onclick="getLocation()">
                My Position <i class="bi bi-compass"></i> 
        </button>

        <button type="button" id= "mapCenterButton" class="btn btn-outline-primary" onclick="markMapCenter()">
                New <i class="bi bi-geo-alt-fill"></i> 
        </button>

        <br>  
        
      </div>

    </div>
  </div>
</div>
<script>

    
$(document).ready(function() {
    getLocation();
});


   
function newObservationModal(){
  $('#newObservationModal').modal('toggle');
  getLocation();
}
    
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Unable to determine position");
  }
}

var positionCount = 0;


function showPosition(position) {
    document.getElementById("latitude").placeholder = position.coords.latitude;
    document.getElementById("longitude").placeholder = position.coords.longitude;

    map.panTo(new L.LatLng(position.coords.latitude,  position.coords.longitude));
    map2.panTo(new L.LatLng(position.coords.latitude,  position.coords.longitude));

    var personIcon = L.icon({
    iconUrl: 'icons/standingperson.png',
    iconSize:     [50, 50], // size of the icon
    iconAnchor:   [25, 50], // point of the icon which will correspond to marker's location
    zIndexOffset: -100,
});
    personIcon = new L.marker(map.getCenter(), {icon: personIcon, clickable:true});
    personIcon.addTo(map);
    positionCount++;
  
}


function markMapCenter(){
  var curLat = map2.getBounds().getCenter().lat;
  var curLng  = map2.getBounds().getCenter().lng;
  document.getElementById("latitude").placeholder = map2.getBounds().getCenter().lat;
  document.getElementById("longitude").placeholder = map2.getBounds().getCenter().lng;

  document.getElementById("mapCenterButton").blur();

  L.marker([curLat, curLng]).addTo(map2);
  L.marker([curLat, curLng]).addTo(map); 
  
  console.log(positionCount);
}




var map = L.map('map').setView([44.668651, -63.570444], 18);
mapLink = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 18,
    }).addTo(map);

    var marker;   

var map2 = L.map('map2').setView([44.6369077, -63.59041448], 18);
mapLink2 = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink2 + ' Contributors',
    maxZoom: 19,
    }).addTo(map2);


    

// Comment out the below code to see the difference.
$('#newObservationModal').on('shown.bs.modal', function() {
  map2.invalidateSize();
});




// Add in a crosshair for the map
var crosshairIcon = L.icon({
    iconUrl: 'icons/crosshair.png',
    iconSize:     [20, 20], // size of the icon
    iconAnchor:   [10, 10], // point of the icon which will correspond to marker's location
});
crosshair = new L.marker(map.getCenter(), {icon: crosshairIcon, clickable:false});
crosshair.addTo(map2);

// Move the crosshair to the center of the map when the user pans
map2.on('move', function(e) {
    crosshair.setLatLng(map2.getCenter());
    document.getElementById("latitude").placeholder = map2.getBounds().getCenter().lat;
    document.getElementById("longitude").placeholder = map2.getBounds().getCenter().lng;
});




</script>


<?php include "includes/footer.php" ?>

