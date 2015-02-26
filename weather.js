$("#get-weather").on("click", function(event) {
  var city = $("#city").val();
  event.preventDefault();

  if (city) {
    $.get("scraper.php?city=" + city, function(data) {
      $(".alert").removeClass("alert-danger").addClass("alert-success").text(data).fadeIn();
    });
  }
  else {
    $(".alert").removeClass("alert-success").addClass("alert-danger").text("Please enter a city.").fadeIn();
  }
});