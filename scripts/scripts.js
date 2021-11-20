//Settigns for the data table:
$(document).ready(function() {
    $('#pointTable').DataTable( {
        paging: false,
        info: false,
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );

//Change cell's data value:
var update = document.getElementsByTagName("td");
for( var i = 0; i < update.length; ++i ) {
    update[i].onclick = function() { 
        $("#editCellModal").modal('show');
    }
}

//For adding video to the screen:
var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}


var video2 = document.querySelector("#videoElement2");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video2.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}




//Functions for calling modals (should be refactored):
function openFileModal(){
  $('#openSurveyModal').modal('toggle');
}

function newFileModal(){
  $('#newSurveyModal').modal('toggle');
}
function newObservationModal(){
  $('#newObservationModal').modal('toggle');
}
function cameraModal(){
  $('#cameraModal').modal('toggle');
}
function clinometerModal(){
  $('#clinometerModal').modal('toggle');
}
function settingsModal(){
  $('#settingsModal').modal('toggle');
}
function editCellModal(){
  $('#editCellModal').modal('toggle');
}
function settingsModal(){
  $('#settingsModal').modal('toggle');
}
function cloudModal(){
  $('#cloudModal').modal('toggle');
}
function newUserModal(){
  $('#newUserModal').modal('toggle');
}







