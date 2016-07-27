function startTime(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
var strcount
var x = new Date()

document.getElementById('ftr').innerHTML = x;
tt=startTime();
}
