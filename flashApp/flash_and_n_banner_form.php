<?php $count= $_POST['count'];?>

<?php include_once("header.php");?>

            <script type="text/javascript" language="JavaScript">

function checkCheckBoxes(theForm) {
	if (
    
    <?php 
    
      for ($m=1; $m<$count; $m++ ){
        
        echo 'theForm.checkbox_'.$m.'.checked == false && ';
        
      } 
    
       echo 'theForm.checkbox_'.$count.'.checked == false)';
    ?>

    
    
	{
		alert ('Please, double check!');
		return false;
	} else { 	
		return true;
	}
}

</script> 
            


    <div class="container-fluid">
      <div class="row row-centered">
        <div class="col-md-6 col-centered">
          <form action="/flashApp/flash_and_n_banner_action.php" method="POST" id="theForm" name="theForm" onsubmit="return checkCheckBoxes()">
            
            
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
              <input type="hidden" name="count" value="<?php echo $count;?>">
              
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
                    <input type="dimage" class="form-control" id="dimage" value="787/adorama_1-11_flashsale_desktop_non-vip.jpg" name="dimage">
                    </div>
                    <div class="form-group">
                      <label for="height">Image Height</label>
                      <input type="height" class="form-control" id="height" value="971" name="height">
                      </div>
                      <div class="form-group">
                        <label for="M Image">Mobile Image</label>
                        <input type="mimage" class="form-control" id="mimage" value="846/adorama_1-19_flashsale_mobile_vip.jpg" name="mimage">
                        </div>
                       
            </fieldset>
            
            <hr style="background-color:#407365; height:3px; margin:20px 0;">
            

            
            
            <?php for( $i = 1; $i<($count+1); $i++ ) {
echo '<fieldset class="form-group" id="field2">';
echo '<legend class="col-form-legend" id="legend2">Bottom Banner #'.$i.'</legend>';
echo '<div class="checkbox"><label><input type="checkbox" value="checkbox_'.$i.'">Validate</label></div>';  
echo '<div class="form-group">';
echo '<label for="fname'.$i.'">Bottom Banner Name</label>';
echo '<input type="fname'.$i.'" class="form-control" id="fname'.$i.'" value="AmEx Banner" name="fname'.$i.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="flink'.$i.'">Bottom Banner Link</label>';
echo '<input type="flink'.$i.'" class="form-control" id="flink'.$i.'" value="https://www.adorama.com/hbsh107d.html?emailprice=t" name="flink'.$i.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="flinkname'.$i.'">Bottom Banner Linkname</label>';
echo '<input type="flinkname'.$i.'" class="form-control" id="flinkname'.$i.'" value="D_FP_Bottom Banner" name="flinkname'.$i.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="fimage'.$i.'">Bottom Banner</label>';
echo '<input type="fimage'.$i.'" class="form-control" id="fimage'.$i.'" value="866/Super-Bowl-Contest-2017-Non-VIP_03.png" name="fimage'.$i.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="fheight'.$i.'">Bottom Banner Height</label>';
echo '<input type="fheight'.$i.'" class="form-control" id="fheight'.$i.'" value="182" name="fheight'.$i.'">';
echo '</div>';
echo '';
echo '</fieldset>';
              
echo '<hr style="background-color:#407365; height:3px; margin:20px 0;">' ;             
  
          } ?>
            

            
            
                            <button type="submit" class="btn btn-primary" formtarget="_blank">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
            
            
                          </form>
                        </div>
                      </div>
                    </div>
                   

<?php include_once("footer.php");?>