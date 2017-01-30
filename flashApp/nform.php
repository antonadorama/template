<?php include_once("header.php");?>

    <div class="container-fluid">
      <div class="row row-centered">
        <div class="col-md-6 col-centered">
          <form action="/flashApp/flash_and_n_banner_form.php" method="POST">
            <fieldset class="form-group">
              <legend class="col-form-legend"></legend>
              <div class="form-group">
                <label for="count">How Many Additional Banners</label>
                <input type="count" class="form-control" id="count" value="" name="count">
              </div>
            </fieldset>
            <button type="submit" class="btn btn-primary" formtarget="_blank">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </form>
        </div>
      </div>
    </div>

<?php include_once("footer.php");?>