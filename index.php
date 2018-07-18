<?php include './views/header.php'?>
<?php include './views/navbar.php'?>

    <!-- <br> -->



    <div class="slide-show" uk-slider="autoplay:true autoplay-interval: 1000">

        <div class="uk-position-relative uk-visible-toggle uk-dark">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
                <li class="uk-width-1-3">
                    <img src="http://placehold.it/350x120" alt="">
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>

<?php include './views/showing_stores.php'?>

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
