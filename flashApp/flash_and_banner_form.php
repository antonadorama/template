<?php include_once("header.php");?>


    <div class="container-fluid">
      <div class="row row-centered">
        <div class="col-md-6 col-centered">
          <form action="/flashApp/flash_and_banner_action.php" method="POST">
            
            
            <fieldset class="form-group" id="field3">
              <legend class="col-form-legend" id="legend3"></legend>
             <div class="form-group">
                          <label for="utm">UTM</label>
                          <input type="utm" class="form-control" id="utm" value="FlashSaleVipWDUltra012417" name="utm">
                          </div>
                          <div class="form-group">
                            <label for="ttl">TTL</label>
                            <input type="ttl" class="form-control" id="ttl" value="Hurry and Save 41% OFF our 2TB WD My Passport Ultra. Shop Now!" name="ttl" name="ttl">
              </div>
            </fieldset>
            
            <hr style="background-color:#407365; height:3px; margin:20px 0;">
            
            <fieldset class="form-group" id="field1">
              <legend class="col-form-legend" id="legend1">Main Banner</legend>
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
                       
            </fieldset>
            
            <hr style="background-color:#407365; height:3px; margin:20px 0;">
            
            <fieldset class="form-group" id="field2">
              <legend class="col-form-legend" id="legend2">Bottom Banner</legend>
            <div class="form-group">
              <label for="fname">Bottom Banner Name</label>
              <input type="fname" class="form-control" id="fname" value="AmEx Banner" name="fname">
              </div>
              <div class="form-group">
                <label for="flink">Bottom Banner Link</label>
                <input type="flink" class="form-control" id="flink" value="https://www.adorama.com/" name="flink">
                </div>
                <div class="form-group">
                  <label for="flink">Bottom Banner Linkname</label>
                  <input type="flink" class="form-control" id="flink" value="D_FP_Bottom Banner" name="flinkname">
                  </div>
                  <div class="form-group">
                    <label for="F Image">Bottom Banner</label>
                    <input type="fimage" class="form-control" id="fimage" value="787/adorama_1-11_flashsale_desktop_non-vip.jpg" name="fimage">
                    </div>
                    <div class="form-group">
                      <label for="fheight">Bottom Banner Height</label>
                      <input type="fheight" class="form-control" id="fheight" value="150" name="fheight">
                      </div>

            </fieldset>
            
            
                            <button type="submit" class="btn btn-primary" formtarget="_blank">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
            
            
                          </form>
                        </div>
                      </div>
                    </div>
                   

<?php include_once("footer.php");?>