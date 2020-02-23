

<?php 

error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
date_default_timezone_set($get['timezone']);
$city = $_GET['city'];
$country = $_GET['country'];

$string= "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."7d1cbed50188d8baf32994d4ca5d81eb";
$data = json_decode(file_get_contents($string),true);

$temp = $data['main']['temp'];

$icon = $data['main'][0]['icon'];
$Visibility_one = $data['Visibility'];
$Visibilitykm =$Visibility_one/1000;
$Visibility=$Visibilitykm;
$desc = $data['weather'][0]['description'];
$clouds = $data['clouds']['all'];
$humidity =$data['main']['humidity'];
$windspeed =$data['wind']['speed'];
$pressure =$data['main']['pressure'];
/*$sunrise =$data['sys']['sunrise'];
$sunset =$data['sys']['sunset'];*/

?>








<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Weather Application</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/jumbotron/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
    <!-- <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c"> -->
    <!-- <style>
    .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    }
    @media (min-width: 768px) {
    .bd-placeholder-img-lg {
    font-size: 3.5rem;
    }
    }
    </style> -->
    <!-- Custom styles for this template -->
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
  </head>
  <body style="background-color: #74b9ff;color: #fff; ">
    
    <p  style="font-size: 28px;margin-top: 50px; margin-bottom: 50px; text-align: center;">Weather Application</p>
    
    <div class="col-sm-6" style="margin-left: 350px;" >
      <div class="container">
        <table class="table"style="text-align: center; color: #fff;">
          <tr>
            <td>Temperature:</td>
            <td><?php echo $logo; ?><?php echo $temp; ?></td>
            
          </tr>
          <tr>
            
            <td>Description:</td>
            <td><?php echo $desc; ?></td>
          </tr>
          <tr>
            
            <td>Clouds:</td>
            <td><?php echo $clouds; ?></td>
          </tr>
          <tr>
            
            <td>Humidity:</td>
            <td><?php echo $humidity; ?></td>
            
          </tr>
          <tr>
            
            <td>Wind Speed:</td>
            <td><?php echo $windspeed; ?></td>
            
          </tr>
          <tr>
            
            <td>Pressure:</td>
            <td><?php echo $pressure; ?></td>
          </tr>
          <tr>
            
            <td>Visibility</td>
            <td><?php echo $Visibility; ?></td>
          </tr>
          <tr>
            <td>Sunrise:</td>
            <td><?php echo $sunrise; ?></td>
          </tr>
          <tr>
            <td>Sunset:</td>
            <td><?php echo $sunset; ?></td>
          </tr>
          
        </table>
      </div>
      
    </div>
    <footer class="container" style="text-align: center;">
      <p>&copy; Created by Monika</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
  </html>