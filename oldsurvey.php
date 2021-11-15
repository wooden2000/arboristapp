<?php include "includes/header.php" ?>



<div class = "col-sm-12">
    <div class="card">
        <div class="card-body">
            <h4>Map</h4>
            <div id="map"></div>
        </div>
    </div>
</div>

<div class = "col-sm-12">
    <div class="card button-card">
        <div class="card-body">
        <button type="button" class="btn btn-secondary">Duplicate</button>
        <button type="button" class="btn btn-primary">New Observation <i class="bi bi-geo-alt-fill"></i></button>
        </div>
    </div>
</div>


<div class = "col-sm-12">
    <div class="card point-list">
        <div class="card-body">
            <h4>Observations</h4>
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
                        <td>4</td>
                        <td>Elm</td>
                        <td>2.00</td>
                        <td>5.50</td>
                        <td>10.00</td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Birch</td>
                        <td>3.00</td>
                        <td>3.50</td>
                        <td>7.00</td>
                        <td>flat</td>
                        <td>null</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Birch</td>
                        <td>3.00</td>
                        <td>3.00</td>
                        <td>7.00</td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Maple</td>
                        <td>4.00</td>
                        <td>5.00</td>
                        <td>10.00</td>
                        <td>flat</td>
                        <td>null</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Birch</td>
                        <td>10.00</td>
                        <td>20.00</td>
                        <td></td>
                        <td>South</td>
                        <td>70%</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Cherry</td>
                        <td>15.00</td>
                        <td>5.50</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Cherry</td>
                        <td>20.00</td>
                        <td>4.50</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Cherry</td>
                        <td>20.00</td>
                        <td>5.00</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cherry</td>
                        <td>25.00</td>
                        <td>4.00</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Cherry</td>
                        <td>25.00</td>
                        <td>5.00</td>
                        <td></td>
                        <td>-</td>
                        <td>-</td>
                        <td></td>
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
var map = L.map('map').setView([44.668349, -63.571144], 18);
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php include "includes/footer.php" ?>

