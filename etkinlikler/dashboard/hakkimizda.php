  <?php require_once("header.php");  
  ?>

  <!-- page content -->
  <div class="right_col" role="main">

      <div class="container row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
              <div class="x_title">
                  <h2>Ayarlar</h2>
                  <div class="clearfix"></div>
              </div>
              <form method="post" action="dbIslemleri/hakkimizdaGuncelle" class="form-horizontal form-label-left">
                  <?php 
                        @$kontrol=$_GET["kontrol"];
                        if($kontrol=="basarili"){?>
                  <div class="alert alert-success ">
                      Ayarlar güncellendi.
                  </div>

                  <?php }elseif($kontrol=="basarisiz"){?>

                  <div class="alert alert-danger ">
                      Ayarlar güncellenmedi.
                  </div>
                  <?php }
                    ?>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Hakkımızda Başlık <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input rows="" cols="" type="text" class="form-control" name="hakkimizdaBaslik" required="required"></textarea>
                      </div>
                  </div>
                  <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Hakkımızda İçerik <span
                              class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea rows="" cols="" type="text" class="form-control" name="hakkimizdaIcerik" required="required"></textarea>
                      </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3 text-right">
                          <button type="submit" class="btn btn-success">Kaydet</button>
                      </div>
                  </div>

              </form>
          </div>
          <div class="col-md-2"></div>
      </div>

  </div>
  <!-- /page content -->

  <?php   require_once("footer.php");   ?>