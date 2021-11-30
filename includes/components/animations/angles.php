<!--PAGE CONTENT-->
<img src onerror='init()'>

<script>
var context;
// Converts from degrees to radians.
Math.radians = function(degrees) {
  return degrees * Math.PI / 180;
};
// Converts from radians to degrees.
Math.degrees = function(radians) {
  return radians * 180 / Math.PI;
};
// Calculates Latitude 
function lats(azimuth, distance){
	return distance*Math.cos(Math.radians(azimuth));
}
// Calculates Departures
function deps(azimuth, distance){
	return distance*Math.sin(Math.radians(azimuth));	
}

// Decimal degrees to DMS
function dms(dd){
	var deg = Math.floor(dd);
	var min = Math.floor((dd-Math.floor(dd))*60);
	var sec = Math.floor((((dd-Math.floor(dd))*60)-Math.floor((dd-Math.floor(dd))*60))*60);
	
	return deg + '° ' + min + "' " + sec + "\"";	
}

function deg(dd){
	return Math.floor(dd);
}

function min(dd){
	return Math.floor((dd-Math.floor(dd))*60);
}

function sec(dd){
	return Math.floor((((dd-Math.floor(dd))*60)-Math.floor((dd-Math.floor(dd))*60))*60);
}

function qB(dd){
	if (dd<90){
		return  'N ' + deg(dd) + '°\t\t' + min(dd) + "'\t\t" + sec(dd) + "\"\t\tE";
	}
	else if (dd<180){
		return  'S ' + (180-deg(dd)) + '° ' + (60-min(dd)) + "' " + (60-sec(dd)) + "\" E";
	}
	else if (dd<270){
		return  'S ' + (270-deg(dd)) + '° ' + (60-min(dd)) + "' " + (60-sec(dd)) + "\" W";
	}
	else{
		return  'N ' + (360-deg(dd)) + '° ' + (60-min(dd)) + "' " + (60-sec(dd)) + "\" W";
	}	
}

function init(){
	setInterval(draw,10);
	context= myCanvas.getContext('2d');
	
	var t = 0;
	var r = 100;
	var r2 = r;
	var xC = 100;
	var yC = 100;
	var xC2 = xC;
	var yC2 = yC+600;
	

	function draw(){
	context.clearRect(0,0, 1000,1200);
	
		context.lineWidth = 1;
		
		for (i = 0; i<220; i+=25){
			context.beginPath();
			context.strokeStyle='#888';
			context.moveTo(i,0);
			context.lineTo(i, 200);
			context.stroke();
		}
		
		for (i = 0; i<220; i+=25){
			context.beginPath();
			context.strokeStyle='#888';
			context.moveTo(0,i);
			context.lineTo(200, i);
			context.stroke();
		}
		
	
		context.lineWidth = 5;
	
		context.beginPath();
		context.setLineDash([1, 5]);
		context.strokeStyle='#333';
		context.arc(xC,yC,r,0,Math.radians(360),true); context.closePath();
		context.stroke();

		context.beginPath();
		context.strokeStyle='#0000FF';
		context.setLineDash([0]);
		context.moveTo(xC,yC);
		context.lineTo(xC+lats(t-90,r),yC+deps(t-90,r));
		context.stroke();
		
		context.beginPath();
		context.strokeStyle='#FF0000';
		context.moveTo(xC,yC);
		context.lineTo(xC+lats(t-90,r),yC);
		context.stroke();
		
		context.beginPath();
		context.strokeStyle='#00FF00';
		context.moveTo(xC+lats(t-90,r),yC+deps(t-90,r));
		context.lineTo(xC+lats(t-90,r),yC);
		context.stroke();
	
		context.lineWidth = 1;
		
		t+=0.1;
		if(t>360){
			t=0	
		}
	}
}
  
</script>

<canvas id="myCanvas" width="200" height="200"></canvas> 
