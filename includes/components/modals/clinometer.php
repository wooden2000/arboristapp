
<div class="modal" id="clinometerModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Clinometer</h4>
        <button type="button" class="close" onclick ="clinometerModal()">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="btnDeviceIdContainer">
              <p>Choose Camera:</p>
            </div>
            <pre id="res"></pre>
            
        <div id = "outer-wrap">

            <video id="preview" autoplay width= 100%></video>


            <div id = "layer-1"></div>
            <div id = "layer-2"></div>

            <div id = "layer-3">
              <div class = "dot-wrapper">
                <div class = "dot"></div>
              </div>
            </div>

            <div id = "layer-4">
              <div class = "dot-wrapper">
                <div class = "dot2"></div>
              </div>
            </div>
        </div>

        <div id="main">
          <h1>Device data</h1>    
              <p>Tilt: <span id="yval"></span></p>
              <p>Rotation: <span id="zval"></span></p>
          </div>

        <form class="form-inline">
        <div class="form-group narrow-form">
            <input type="number" id="points" name="points" placeholder = "metres" step="1"> 
            <label for="points">Distance to tree</label>
        </div>
        </form>

        <form class="form-inline">
        <div class="form-group narrow-form">
            <input type="number" id="points" name="points" placeholder = "metres" step="1"/>
            <label for="points">Calculated Height</label>
        </div>
        </form> 

        
        <form class="form-inline">
        <div class="form-group narrow-form">
            <input type="number" id="points" name="points" placeholder = "metres" step="1"/>
            <label for="points">Calculated Diameter</label>
        </div>
        </form> 

        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Largest apparent size of trees at location
          </label>
        </div>

        <button type="button" class="btn btn-success" onclick="clinometerModal()">Save</button>

      </div>

    
      <!-- Modal footer -->
      <div class="modal-footer"> 
        <h5 >About</h5>
        <p>Point your camera at the top of the tree and click the blue button. Then slew your camera to the top of the tree and click the blue button. Enter the distance to the, tree, and the height will be calculated. If the tree has the largest apparent diameter (as it appears in the camera image), mark it as such.</p>
        
        <p>
        <div class = "animation-wrapper">
          <div class ="animation">
            <?php include "includes/components/animations/angles.php" ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>

  /**
    deviceapi-normaliser.js
    
    Author: Andrew Fisher
    Date: 15/09/2011
    
    Version: 0.2
    
    This file is licensed under a BSD licence as per the Licence.
        
**/
/*
http://ajfisher.me/code/deviceapi-normaliser/examples/data.html
*/
// set up some constants
var accel_multi = 1; // used to normalise the accel values if firefox

$(function() {
    if ($.browser.mozilla) {
        accel_multi = 9.81;
    }
});

function deviceMotion(e) {

	// we need to normalise the values, safari will just return
	// as they are but ff will multiply by gravity.
    this.accelerationIncludingGravity = new Object();
    this.accelerationIncludingGravity.x = e.accelerationIncludingGravity.x * accel_multi;
    this.accelerationIncludingGravity.y = e.accelerationIncludingGravity.y * accel_multi;
    this.accelerationIncludingGravity.z = e.accelerationIncludingGravity.z * accel_multi;
    
    this.acceleration = new Object();
    this.acceleration.x = null;
    this.acceleration.y = null;
    this.acceleration.z = null;
    
    return (this);
}

function deviceOrientation(e) {
    
    // normalise the values for the orientation event.
    
    // TODO:
    // these values need further normalisation because I know safari
    // breaks them but haven't got a device to test with.
    
	this.gamma = e.gamma;
	this.beta = e.beta;
	this.alpha = e.alpha; // compass
	
	return(this);
	
}


// ------

		window.addEventListener("deviceorientation", update_gyro, false);

        window.addEventListener("devicemotion", update_accel, false);

		function update_gyro(e) {
			// gets the gyro position
			var tilt = deviceOrientation(e);
		
            $("#xval").html(tilt.gamma);
            $("#yval").html(tilt.beta);
            $("#zval").html(tilt.alpha);
        }
        
        function update_accel(e) {
        	// gets the accelerometer values
        	var a = deviceMotion(e);
            $("#xaccel").html(a.accelerationIncludingGravity.x);
            $("#yaccel").html(a.accelerationIncludingGravity.y);
            $("#zaccel").html(a.accelerationIncludingGravity.z);
        }



navigator.mediaDevices.getUserMedia({ video: true }).then(stream => {
  preview.srcObject = stream;
  navigator.mediaDevices.enumerateDevices().then(devices => {
    devices.filter(device => device.kind === 'videoinput').forEach(device => {
      let btn = document.createElement('button')
      btn.setAttribute('class', 'btn btn-outline-primary');
      btn.setAttribute('style', 'margin-right: 1em');
      btn.textContent = device.label;
      btn.dataset.deviceId = device.deviceId;
      btn.onclick = function () {
        changeDdevice(this.dataset.deviceId);
      }
      btnDeviceIdContainer.appendChild(btn);
    });
    //res.textContent = JSON.stringify(devices, null, 2);
  });
});
function changeFacingMode(facingMode) {
  if (preview.srcObject) {
    preview.srcObject.getTracks().forEach(track => track.stop());
    preview.srcObject = null;
  }
  navigator.mediaDevices.getUserMedia({
    video: {
      facingMode: facingMode
    }
  }).then(stream => preview.srcObject = stream);
}
function changeDdevice(deviceId) {
  if (preview.srcObject) {
    preview.srcObject.getTracks().forEach(track => track.stop());
    preview.srcObject = null;
  }
  navigator.mediaDevices.getUserMedia({
    video: {
      deviceId: deviceId
    }
  }).then(stream => preview.srcObject = stream);
}
btnUser.onclick = _ => changeFacingMode('user');
btnEnvironment.onclick = _ => changeFacingMode('environment');
</script>