<?php include './views/header.php' ?>

<?php
    $user_id = $_GET['id'];
    if(isset($_SESSION) && $_SESSION['id'] != $user_id){
?>
    <div id="main" class="">
            <h1 >
               متاسفانه صفحه مورد نظر یافت نشد <i class="fa fa-frown-o"></i>
            </h1>
    </div>
    <?php }else{ ?>  
<?php include './views/navbar.php' ?>    

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>بن</th>
                            <th>تعداد</th>
                            <th class="text-center">درصد</th>
                            <th class="text-center">قیمت</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                          <tr>
                            <td class="col-md-6">
                            <div class="media">
                                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">نام فروشگاه</a></h4>
                                    <h5 class="media-heading"> بن صد هزار تومنی </h5>
                                </div>
                            </div></td>
                            <td class="col-md-1" style="text-align: center">
                            <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                            </td>
                            <td class="col-md-1 text-center"><strong>5%</strong></td>
                            <td class="col-md-1 text-center"><strong>555</strong></td>
                            <td class="col-md-1">
                            <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span> استرداد
                            </button></td>
                        </tr>
                        <tr>
                          <td><h5>درصد تخفیف</h5></td>
                          <td class="text-right float-right"><h5><strong>45</strong></h5></td>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                        </tr>
                        <tr>
                          <td><h5>مجموع تخفیف</h5></td>
                          <td class="text-right float-right"><h3><strong>45464</strong></h3></td>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } ?>