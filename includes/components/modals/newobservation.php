
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
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                </div>
                <input type="text" class="form-control" placeholder="Height" aria-label="Username" aria-describedby="basic-addon1">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <a href ="#" onclick="clinometerModal()"><i class="bi bi-rulers"></i></a></span>
                </div>
                <input type="text" class="form-control" placeholder="Diameter" aria-label="Username" aria-describedby="basic-addon1">

            </div>

            <div class="input-group mb-3">
               
               <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-compass"></i></a></span>
               </div>
               <input type="text" class="form-control" placeholder="Aspect" aria-label="Username" aria-describedby="basic-addon1">

               <div class="input-group-prepend">
                   <span class="input-group-text" id="basic-addon1"> <a href ="#" data-toggle="modal" data-target="#exampleModal2"><i class="bi bi-map"></i></a></span>
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
        <button type="button" class="btn btn-outline-primary  btn-lg btn-block" onclick="cameraModal()">
            <i class="bi bi-camera"></i> Photograph
            </button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary " data-dismiss="modal">Add Observation</button>
      </div>
    </div>
  </div>
</div>
<script>

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
$('#newObservationModal').on('shown.bs.modal', function() {
  map2.invalidateSize();
});

</script>