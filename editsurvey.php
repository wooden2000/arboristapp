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


</script>

<?php include "includes/footer.php" ?>

