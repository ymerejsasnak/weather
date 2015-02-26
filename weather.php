<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="weather.css">
  <title>Weather</title>
</head>

<body>


  <div class="container">

    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <h1 class="text-center white">What's My Weather?</h1>
        <p class="lead text-center">Enter your location to find out.</p>

        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="city" id="city" placeholder="city name">
          </div>
          <div class="text-center">
            <button class="btn btn-success btn-lg">Get my forecast</button>
          </div>
        </form>



      </div>
    </div>



  </div>
  






  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="weather.js"></script>
</body>
</html>


