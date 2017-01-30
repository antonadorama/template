<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Sale</title>
  <link href="/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    
   <style>
    /* centered columns styles */
.row-centered {
    text-align:center;
}
.col-centered {
    display:inline-block;
    float:none;
    /* reset the text-align */
    text-align:left;
    /* inline-block space fix */
    margin-right:-4px;
  
}
    
    </style> 
    
    <style>
  
  #field1 {
  padding: 20px;
  background: rgba(243,226,199,1);
  background: -moz-linear-gradient(left, rgba(243,226,199,1) 9%, rgba(243,226,199,1) 38%, rgba(239,221,192,1) 57%, rgba(234,213,181,1) 86%, rgba(233,212,179,1) 91%);
  background: -webkit-gradient(left top, right top, color-stop(9%, rgba(243,226,199,1)), color-stop(38%, rgba(243,226,199,1)), color-stop(57%, rgba(239,221,192,1)), color-stop(86%, rgba(234,213,181,1)), color-stop(91%, rgba(233,212,179,1)));
  background: -webkit-linear-gradient(left, rgba(243,226,199,1) 9%, rgba(243,226,199,1) 38%, rgba(239,221,192,1) 57%, rgba(234,213,181,1) 86%, rgba(233,212,179,1) 91%);
  background: -o-linear-gradient(left, rgba(243,226,199,1) 9%, rgba(243,226,199,1) 38%, rgba(239,221,192,1) 57%, rgba(234,213,181,1) 86%, rgba(233,212,179,1) 91%);
  background: -ms-linear-gradient(left, rgba(243,226,199,1) 9%, rgba(243,226,199,1) 38%, rgba(239,221,192,1) 57%, rgba(234,213,181,1) 86%, rgba(233,212,179,1) 91%);
  background: linear-gradient(to right, rgba(243,226,199,1) 9%, rgba(243,226,199,1) 38%, rgba(239,221,192,1) 57%, rgba(234,213,181,1) 86%, rgba(233,212,179,1) 91%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3e2c7', endColorstr='#e9d4b3', GradientType=1 );
  border: 3px solid #E5E4E9;
}

#legend1, #legend2 {
  border: none;
  color: #407365;
  font-size: 2em;
  font-weight: bold;
  padding-bottom:30px;
}

#field2, #field3 {
  padding: 20px;
  background: rgba(255,230,189,1);
  background: -moz-linear-gradient(left, rgba(255,230,189,1) 9%, rgba(255,230,189,1) 38%, rgba(253,225,180,1) 57%, rgba(250,217,166,1) 86%, rgba(249,216,164,1) 91%, rgba(249,216,164,1) 96%);
  background: -webkit-gradient(left top, right top, color-stop(9%, rgba(255,230,189,1)), color-stop(38%, rgba(255,230,189,1)), color-stop(57%, rgba(253,225,180,1)), color-stop(86%, rgba(250,217,166,1)), color-stop(91%, rgba(249,216,164,1)), color-stop(96%, rgba(249,216,164,1)));
  background: -webkit-linear-gradient(left, rgba(255,230,189,1) 9%, rgba(255,230,189,1) 38%, rgba(253,225,180,1) 57%, rgba(250,217,166,1) 86%, rgba(249,216,164,1) 91%, rgba(249,216,164,1) 96%);
  background: -o-linear-gradient(left, rgba(255,230,189,1) 9%, rgba(255,230,189,1) 38%, rgba(253,225,180,1) 57%, rgba(250,217,166,1) 86%, rgba(249,216,164,1) 91%, rgba(249,216,164,1) 96%);
  background: -ms-linear-gradient(left, rgba(255,230,189,1) 9%, rgba(255,230,189,1) 38%, rgba(253,225,180,1) 57%, rgba(250,217,166,1) 86%, rgba(249,216,164,1) 91%, rgba(249,216,164,1) 96%);
  background: linear-gradient(to right, rgba(255,230,189,1) 9%, rgba(255,230,189,1) 38%, rgba(253,225,180,1) 57%, rgba(250,217,166,1) 86%, rgba(249,216,164,1) 91%, rgba(249,216,164,1) 96%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffe6bd', endColorstr='#f9d8a4', GradientType=1 );
}

input:focus {
  background-color: #E1E6E4;
}
  
</style>
    
</head>
<body>

  
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    
     <div class="navbar-header">
        <a class="navbar-brand" href="#" style="height:70px;">
          <img alt="Brand" src="https://www.adorama.com/artworks2/adorama-logo.png">
          </a>
      </div>
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/flashApp/flash_sale_form.php">Flash Sale</a></li>
            <li><a href="/flashApp/flash_and_banner_form.php">Flash Sale + 1 Banner</a></li>
            <li><a href="/flashApp/flash_and_n_banner_form.php">Flash Sale + N Banners</a></li>
            <li><a href="/flashApp/nform.php">N Form</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sliced</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>