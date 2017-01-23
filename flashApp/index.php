<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Sale</title>
  <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    
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
    
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="height:70px !important;">
          <img alt="Brand" src="https://www.adorama.com/artworks2/adorama-logo.png">
          </a>
        
        </div>
      </div>
   
      <p class="navbar-text navbar-center">Flash Sale</p>
      
    </nav>
    <div class="container-fluid">
      <div class="row row-centered">
        <div class="col-md-6 col-centered">
          <form action="flashApp/flash_action.php" method="POST">
            <div class="form-group">
              <label for="name">Product Name</label>
              <input type="name" class="form-control" id="name" value="WD My Passport Ultra 2TB USB 3.0 Secure Portable Hard Drive Black" name="name">
              </div>
              <div class="form-group">
                <label for="link">Product Link</label>
                <input type="link" class="form-control" id="link" value="https://www.adorama.com/wdmpu2tbk.html?emailprice=t" name="link">
                </div>
                <div class="form-group">
                  <label for="link">Linkname</label>
                  <input type="link" class="form-control" id="link" value="D_FP_WD_Ultra_2TB_012417" name="linkname">
                  </div>
                  <div class="form-group">
                    <label for="D Image">Desktop Image</label>
                    <input type="dimage" class="form-control" id="dimage" placeholder="846/adorama_1-19_flashsale_desktop_vip.jpg" name="dimage">
                    </div>
                    <div class="form-group">
                      <label for="height">Image Height</label>
                      <input type="height" class="form-control" id="height" placeholder="1362" name="height">
                      </div>
                      <div class="form-group">
                        <label for="M Image">Mobile Image</label>
                        <input type="mimage" class="form-control" id="mimage" placeholder="846/adorama_1-19_flashsale_mobile_vip.jpg" name="mimage">
                        </div>
                        <div class="form-group">
                          <label for="utm">UTM</label>
                          <input type="utm" class="form-control" id="utm" value="FlashSaleVipWDUltra012417" name="utm">
                          </div>
                          <div class="form-group">
                            <label for="ttl">TTL</label>
                            <input type="ttl" class="form-control" id="ttl" value="Hurry and Save 40% OFF our 2TB WD My Passport Ultra. Shop Now!" name="ttl" name="ttl">
                            </div>
                            <button type="submit" class="btn btn-primary" formtarget="_blank">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                          </form>
                        </div>
                      </div>
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
                  </body>
</html>