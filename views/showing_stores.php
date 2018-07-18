<div class="store">
</div>

  <div class="container">

  <div class="">
  <div align="right" class="row">
      <?php
      $store_brands = $db->get('store_brand'); 
      foreach ($stores as $key => $value ){
          ?>
    <div class="col-lg-4 col-sm-12 col-md-4 ">
      <!-- <a class="" href="" > -->
      <div class="card mb-3">
        <div class="card-header">
          <p class="card-title text-center" href=""><?php echo($value['store_name'])?></p>
          <h6 class="card-subtitle text-muted text-center"><?php echo($value['type'])?></h6>
        </div>
        <?php foreach(glob($value['pics_folder'].'/*.*') as $file){?>
        <img style="height: 200px; width: 100%; display: block;" src="<?php echo($file)?>" alt="Card image">
        <?php }?>
        <div class="card-body">
          <p class="card-text mt-2 mb-1">محدوده فروشگاه</p>
          <P class="card-text mb-2"> برند های تخفیف دار فروشگاه </>
          <div uk-slider="autoplay:true">
          <div class="uk-position-relative uk-visible-toggle uk-dark">
              <ul class="uk-slider-items uk-grid">
                <?php $store_brands = ($db->where('store_id' , $value['id']))->get('store_brand');
                      foreach($store_brands as $key2 => $value2 ){
                          $brand = ($db->where('id' , $value2['brand_id']))->get('brands');
                ?>   
                  <li class="uk-width-small">
                      <div class="uk-card uk-card-default">
                          <div class="uk-card-media-top">
                              <img src="<?php echo($brand[0]['brand_pic'])?>" alt="">
                          </div>
                      </div>
                  </li>
                <?php } ?>
              </ul>

              <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
              <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

          </div>

          <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

          </div>
        </div>
        <div class="card-footer text-muted">
          <a  class="btn btn-info" href=""> آدرس دقیق فروشگاه </a>
          <a href="store.php?store=<?php echo($value['id'])?>" class="btn btn-primary " href="">خرید بن</a>
        </div>
      </div>
    </div>
      <?php }?>
  </div>
  <!-- /.row -->
</div>
</div>

<div class="store">
</div>