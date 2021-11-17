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
        <button type="button" class="btn btn-primary btn-lg btn-block" onclick = "newObservationModal()">New Observation <i class="bi bi-geo-alt-fill"></i></button>
        </div>
    </div>
</div>


<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4><i class="bi bi-info-circle-fill"></i> Details</h4>
            <p>November 1st, 2021, 11:00:10AST</p>

            <form>

              <div class="form-group">
                <label for="formGroupExampleInput2">Field Notes</label>
                <textarea class="form-control" id="formGroupExampleInput2" rows="3" placeholder="Atmospheric pressure: 1013.2mbar&#13Instrument number: A967G1"></textarea>
              </div>

            </form>

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
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script src="https://d19vzq90twjlae.cloudfront.net/leaflet-0.7/leaflet.js">
</script>

<script>

var map = L.map('map').setView([44.668349, -63.571144], 18);
mapLink = 
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 18,
    }).addTo(map);

var marker = L.marker([44.668349, -63.571144]).addTo(map);

var greenIcon = L.icon({
    iconUrl: 'leaf-green.png',
    shadowUrl: 'leaf-shadow.png',

    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});



</script>

<?php include "includes/footer.php" ?>

