var sec = 5;
var myTimer = document.getElementById('myTimer');
var myBtn = document.getElementById('myBtn');
window.onload = countDown;

function countDown() {
  if (sec < 10) {
    myTimer.innerHTML = "0" + sec;
  } else {
    myTimer.innerHTML = sec;
  }
  if (sec <= 0) {
    $("#myBtn").removeAttr("disabled");
    $("#myBtn").removeClass().addClass("btnEnable");
    $("#myTimer").fadeTo(2500, 0);
    myBtn.innerHTML = "Click Here!";
    return;
  }
  sec -= 1;
  window.setTimeout(countDown, 1000);
}