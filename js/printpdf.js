$(window).ready(function() {
doc = new jsPDF({
    orientation: 'portrait',
    unit: 'px',
    format: [390, 250]
  });
  html2canvas($('#screen-seatplan'), {
    onrendered: function(canvas){
      img2 = canvas.toDataURL("image/jpg");
      doc.addImage(img2,'JPEG', 10, 255);
      doc.save('curriculum-'+getDateToday());
    }
  });
  setTimeout(function (e) {
    $('#summary-form').submit();
  }, 5000);
}
function getDateToday() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();

  if(dd<10)
    dd='0'+dd;
  if(mm<10)
    mm='0'+mm;
  today = mm+'-'+dd+'-'+yyyy;
  return today;
}

$(window).ready(function () {
  $('#confirm-reservation-btn').click(function (e) {
    e.preventDefault();
    setTimeout(genPDF, 0);
  });
});
});