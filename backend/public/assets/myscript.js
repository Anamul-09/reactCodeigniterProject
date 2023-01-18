// 3.  Report Office wise stafflist
// #### From employees and offices table
// firstName, lastName, email, city, country those are from USA

$("#officeCode").change(function () {
  var code = $(this).val();
  $.get(
    "http://localhost:8080/reports/allstaff",
    { offcode: code },
    function (data) {
      // alert(data);
      $("#show").html(data);
    }
  );
});

// 4.  Report Office wise stafflist
// #### From employees and offices table
// firstName, lastName, email, city, country those are from USA

$(document).ready(function () {
  $("#reportbtn").click(function () {
    var start = $(stardate).val();
    var end = $(enddate).val();
    // alert(start + end);
    $.get(
      "http://localhost:8080/reports/orderquery",
      { start, end },
      function (data) {
        // alert(data);
        $("#show").html(data);
      }
    );
  });
});
