<?php include './views/header.php'?>
<?php include './views/navbar.php'?>
<?php $store_id = $_GET['store'];
      $db->where("id" , $store_id);
      $this_store = $db->getOne('store');
?>   
    <div class="store-top">
    </div>
    <div class="container">
      <div class="row">


          <div class="col-md-8 col-sm-12">
            <div class="row">
            <div class="col-lg-4  col-sm-12 text-center mb-4">
              <img class=" img-fluid d-block mx-auto" src="./images/discount.png" style="width:100px; height:100px;" alt="">
              <h3>
                <small></small>
              </h3>
              <h3> قیمت صد هزار تومان</h3>
              <p> ارزش خرید بن صد و بیست هزار تومان </p>
              <input type="number" class="uk-input" style="width:100px; border-radius:5px; text-align:center  " min="0"> </input>
            </div>
            <div class="col-lg-4  col-sm-12 text-center mb-4">
              <img class=" img-fluid d-block mx-auto" src="./images/discount.png" style="width:100px; height:100px;" alt="">
              <h3>
                <small></small>
              </h3>
              <h3> قیمت صد هزار تومان</h3>
              <p> ارزش خرید بن صد و بیست هزار تومان </p>
              <input type="number" class="uk-input" style="width:100px; border-radius:5px; text-align:center  " min="0"> </input>
            </div>
            <div class="col-lg-4  col-sm-12 text-center mb-4">
              <img class=" img-fluid d-block mx-auto" src="./images/discount.png" style="width:100px; height:100px;" alt="">
              <h3>
                <small></small>
              </h3>
              <h3> قیمت صد هزار تومان</h3>
              <p> ارزش خرید بن صد و بیست هزار تومان </p>
              <input type="number" class="uk-input" style="width:100px; border-radius:5px; text-align:center  " min="0"> </input>
            </div>
          </div>
        </div>
          <div class="col-md-4 col-sm-12 store-all-copoun">
            <p class="uk-text-bold float-right mt-1">هر چی بن بیشتری از این فروشگاه خریداری بشه ارزش خرید اون بن بالا تر میره</p>


            <p class="uk-text-bold float-right mt-1"> تعداد بن باقی مانده از این فروشگاه :22222</p>

            <p class="float-right mt-1"> مجموع ارزش فعلی بن های شما :  <strong style="color:red"> 8555 </strong> </p>
            <p class="float-right mt-1 mb-2"> <strong style="color:red"> 5% </strong>:درصد فعلی تخفیف اعمال شده روی بن های شما </p>
            <button class="btn btn-primary uk-position-center " style="margin-top:115px" type="button"> خرید بن </button>
            <br/>




          </div>
        </div>
      </div>



      <div class="store">
      </div>
      <div class="text-center">
        آدرس دقیق فروشگاه :<?php echo($this_store['address'])?>
      </div>
      <div class="store">

      </div>


    <div class="container ">
      <div class="row">
      <?php $store_brands = ($db->where('store_id' , $this_store['id']))->get('store_brand');
            foreach($store_brands as $key2 => $value2 ){
              $brand = ($db->where('id' , $value2['brand_id']))->get('brands');
      ?> 
        <div class="col-lg-4 col-sm-12 col-md-4 uk-position-relative">
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="card-title text-center"><?php echo($brand[0]['persian_name'])?></h5>
              <h6 class="card-subtitle text-muted text-center"><?php echo($value2['product_type'])?></h6>
            </div>
            <img style="height: 200px; width: 100%; display: block;" src="<?php echo($brand[0]['brand_pic'])?>" alt="Card image">
            <div class="card-body">
              <p class="card-text text-center">حداکثر تعداد خرید به ازای هر بن: <strong style="color:red"> 88 </strong></p>
              <P class="card-text text-center">قیمت : <strong style="color:red"> قیمت روی محصول </strong> </p>
            </div>
          </div>

        </div>
            <?php } ?>
      </div>
    </div>

















    <div class="store">
    </div>

      <section class="content-section bg-light" id="services">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <h3 class="m-2">          با خرید بن های ما می تونید از تخفیفای خفن فروشگاه های طرف قرارداد ما استفاده کنید </h3>

              <div class="container">

                <!-- Introduction Row -->
                <h1 class="my-4">ما اینجا براتون چی داریم؟</h1>
                <p></p>

                <!-- Team Members Row -->
                <div class="row">

                  <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <img class=" img-fluid d-block mx-auto" src="./images/shop.png" style="width:200px; height:200px;" alt="">
                    <h3>خرید از فروشگاه های معتبر
                      <small></small>
                    </h3>
                    <p>ما براتون معتبرترین کاسبای محل و گلچین می کنیم</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <img class=" img-fluid d-block mx-auto" src="./images/discount.png" style="width:200px; height:200px;" alt="">
                    <h3>تخفیف های عالی باور نکردنی
                      <small></small>
                    </h3>
                    <p>بن تخفیف های حسابی از ما بگیرید</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <img class=" img-fluid d-block mx-auto" src="./images/color-wheel.png" style="width:200px; height:200px;" alt="">
                    <h3>تنوع بی نظیر کالاهای مصرفی
                      <small></small>
                    </h3>
                    <p>علاوه بر اینکه هوای جیبتو داریم، تنوع کالا های زیادی ام داریم</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <img class=" img-fluid d-block mx-auto" src="./images/locate.png" style="width:200px; height:200px;" alt="">
                    <h3>یه فروشگاه به وسعت تهران
                      <small></small>
                    </h3>
                    <p>فرقی نمیکنه کجای تهرانی، بن تخفیف نزدیک ترین فروشگاه به خودتو از ما بخر</p>
                  </div>
                </div>

              </div>
              <!-- /.container -->
              <a class="btn btn-dark btn-xl js-scroll-trigger" href="#how">چطوری از خدمات ما استفاده کنید؟</a>
            </div>
          </div>
        </div>
      </section>
      <br>


    </div>


    <div id="map" style="height:500px;"></div>

        <footer class="py-5 bg-light">
          <div class="container">
            <p class="m-0 text-center text-black">کلیه حقوق برای شرکت  &copy; محفوظ است 2018</p>
          </div>
          <!-- /.container -->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script>

          function initMap() {

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 11,
              center: {lat: 35.698, lng: 51.317}
            });

            // Create an array of alphabetical characters used to label the markers.
            var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // Add some markers to the map.
            // Note: The code uses the JavaScript Array.prototype.map() method to
            // create an array of markers based on a given "locations" array.
            // The map() method here has nothing to do with the Google Maps API.
            var markers = locations.map(function(location, i) {
              return new google.maps.Marker({
                position: location,
                label: labels[i % labels.length]
              });
            });

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers,
                {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
          }
          var locations = [
            {lat: 35.698, lng: 51.317},
            {lat: 35.698, lng: 51.317},
            {lat: 35.628, lng: 51.387},
            {lat: 35.695, lng: 51.311},
            {lat: 35.690, lng: 51.312},

            {lat: 35.700, lng: 51.318}
          ]
        </script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuRzhD9XKf8x0iJn2FA8mCzJExIJbOPCo&callback=initMap">
        </script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>





      </body>

  </html>
