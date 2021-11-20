
<!-- Modal -->
<div class="modal fade" id="newObservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-geo-alt-fill"></i>New Observation</h5>
        <button type="button" class="close" onclick="newObservationModal()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>November 1st, 2021, 13:05:10AST</p>
      <p>
      <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="getLocation()">
            Device Position <i class="bi bi-compass"></i> 
      </button>
      </p>

      <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#">Lat.</a></span>
                </div>
                <input type="text" class="form-control" id = "latitude" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2">Long.</a></span>
                </div>
                <input type="text" class="form-control" id = "longitude" placeholder="" aria-label="Username" aria-describedby="basic-addon1">

            </div>
        </form>

        <p>
          <button type="button" id= "mapCenterButton" class="btn btn-outline-primary  btn-lg btn-block" onclick="getMapCenter(); this.blur()">
              New Marker<i class="bi bi-geo-alt-fill"></i> 
          </button>
        </p>

        <div id="map2"></div>
        
        <br>   

        <form class="form-inline">
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1">
                <option selected>Species</option>
                <option>Maple</option>
                <option>Birch</option>
                <option>Elder</option>
                <option>Oak</option>
                <option>Elm</option>
                </select>
            </div>
            

            <div class="input-group mb-3">
               
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                </div>
                <input type="text" class="form-control" placeholder="Height" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                </div>
                <input type="text" class="form-control" placeholder="Diameter" aria-label="Username" aria-describedby="basic-addon1">

            </div>

            <label class="sr-only" for="inlineFormInputName2">Damage Condition</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Damage Condition">

            <label class="sr-only" for="inlineFormInputName2">Notes</label>
            <input type="textarea" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Notes">


        </form>

        <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="cameraModal()">
            Photograph <i class="bi bi-camera"></i> 
        </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary " data-dismiss="modal" onclick="newObservationModal()">Add Observation</button>
      </div>
    </div>
  </div>
</div>
<script>

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    alert("Unable to determine position");
  }
}


var map2 = L.map('map2').setView([44.6369077, -63.59041448], 18);
mapLink2 = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink2 + ' Contributors',
    maxZoom: 19,
    }).addTo(map2);

    var marker;

// Comment out the below code to see the difference.
$('#newObservationModal').on('shown.bs.modal', function() {
  map2.invalidateSize();
});



function showPosition(position) {
  document.getElementById("latitude").placeholder = position.coords.latitude;
  document.getElementById("longitude").placeholder = position.coords.longitude;

  map2.panTo(new L.LatLng(position.coords.latitude,  position.coords.longitude))
}

function getMapCenter(){
  var curLat = map2.getBounds().getCenter().lat;
  var curLng  = map2.getBounds().getCenter().lng;
  document.getElementById("latitude").placeholder = map2.getBounds().getCenter().lat;
  document.getElementById("longitude").placeholder = map2.getBounds().getCenter().lng;

  document.getElementById("mapCenterButton").blur();

  L.marker([curLat, curLng]).addTo(map2); 
}

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
});




</script>
