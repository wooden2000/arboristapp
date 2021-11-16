$(document).ready(function() {
    $('#pointTable').DataTable( {
        paging: false,
        info: false,
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );



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

// $(window).on('load', function() {
//     $('#exampleModal2').modal('show');
// });

var update = document.getElementsByTagName("td");
for( var i = 0; i < update.length; ++i ) {
    update[i].onclick = function() { 
        $("#editCellModal").modal('show');
    }
}

function openFileModal(){
  $('#openSurveyModal').modal('toggle');
}


function newFileModal(){
  $('#newSurveyModal').modal('show');
}

function newObservationModal(){
  $('#newObservationModal').modal('show');
}

function cameraModal(){
  $('#cameraModal').modal('show');
}

function clinometerModal(){
  $('#clinometerModal').modal('show');
}

function settingsModal(){
  $('#settingsModal').modal('show');
}





