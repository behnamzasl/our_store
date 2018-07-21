<?php 
    // session_start();
    $email=$password=$confirm_password="";
    $login_err=$username_err=$password_err=$confirm_password_err="";
    // echo ("salaaaaaaaaaam");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(isset($_POST['signup'])){
        if(empty(trim($_POST["email"]))){
          $username_err = "please enter your email";
          // echo ("fsdfsdf");
        }
        else{
          $email = trim($_POST["email"]);
          $users = ($db->where('email',$email))->get('users');
          if (sizeof($users) != 0)
          {
            $username_err = "This email is already taken.";
            // echo("takeneeeeeeeeeeeeeeee");
          }
        }
        if(empty(trim($_POST['password']))){
            $password_err = "please enter a password";
        }  
        elseif(strlen(trim($_POST['password']))<6){
          $password_err = "Password must have atleast 6 characters.";
        }
        else{
          $password = trim($_POST['password']);
        }

        if(empty(trim($_POST['confirm_password']))){
          $confirm_password_err = "please confirm password";
        }
        else{
          $confirm_password = trim($_POST['confirm_password']);
          if($password != $confirm_password){
            $confirm_password_err = "password did not match";
          }
        }

        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
          $user =[];
          $user['email'] = $email;
          $user['password'] = password_hash($password , PASSWORD_DEFAULT);
          $db->insert('users' , $user);
          echo("signed up");
        }
    }
    elseif(isset($_POST['login'])){
      echo("salam logger");
      if(empty(trim($_POST["email"]))){
        $username_err = "please enter your email";
        // echo ("fsdfsdf");
      }
      else{
        $email = trim($_POST["email"]);
      }
      if(empty(trim($_POST['password']))){
          $password_err = "please enter a password";
      }  
      else{
        $password = trim($_POST['password']);
      }
      if(empty($username_err) && empty($password_err)){
        $users = ($db->where('email',$email))->get('users');
        if (sizeof($users) == 0 )
        {
          $login_err = "invalid username or password";
        }
        elseif(!password_verify($password , $users[0]['password'])){
          $login_err = "invalid pass";
        }
        else{
          echo("logged in");
          $_SESSION['email'] = $email;
        }
      }
    }
    }
  
?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand brand-nav" href="./index.php">کوپن</a>
      <form class="form-inline my-2 my-lg-0" style="margin-left:5px;">
        <input class="form-control mr-sm-2 uk-text-right" type="text" placeholder="چه محصولی میخوای؟">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">جست و جو</button>
      </form>
      <button class="btn btn-danger " type="button" style="margin-left:5px;" data-toggle="modal" data-target="#buycopoun"> استرداد بن </button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginOrRegister">ورود/ثبت نام</button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto float-right">
          <li class=" active">
            <a class="nav-item-style" href="#"> <span class="sr-only">(current)</span></a>
          </li>
          <li class="">
            <a class="nav-item-style " href="#">بهداشتی و زیبایی</a>
          </li>
          <li class="">
            <a class="nav-item-style " href="#">خواربار</a>
          </li>
          <li class="">
            <a class="nav-item-style " href="#">نوشیدنی</a>
          </li>
          <li class="">
            <a class="nav-item-style" href="#">مواد غذایی</a>
          </li>
          <li class="">
            <a class="nav-item-style" href="#">اسم فروشگاه  <span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="">
            <button class="btn btn-danger " type="button" > خرید بن  </button>
          </li> -->

        </ul>

      </div>

    </nav>
            <!-- Modal -->
            <div class="modal fade" id="loginOrRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                        </button>

                    </div>
                    <div class="modal-body">
                        <div role="tabpanel" >
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs uk-position-right" role="tablist">
                                <li role="presentation" class="active" style="margin-right:3px;"><button class="btn btn-info" href="#register" aria-controls="uploadTab" role="tab" data-toggle="tab">ثبت نام</button>
                                </li>
                                <li role="presentation" style="margin-right:3px;"><button class="btn btn-danger" href="#login" aria-controls="browseTab" role="tab" data-toggle="tab" style="">ورود</button>

                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="register">
                                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">آدرس ایمیل</label>
                                      <input type="email" name="email" class="form-control" value="<?php echo $email; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل خود را وارد کنید">
                                      <span class="help-block"><?php echo $username_err; ?></span>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">رمز عبور</label>
                                      <input type="password" name="password" class="form-control" value="<?php echo $password; ?>" id="exampleInputPassword1" placeholder="رمز عبور">
                                      <span class="help-block"><?php echo $password_err; ?></span>
                                      <label for="exampleInputPassword1">تکرار رمز عبور</label>
                                      <input type="password" name ="confirm_password"class="form-control" value="<?php echo $confirm_password; ?>" id="exampleInputPassword2" placeholder="تکرار رمز عبور">
                                      <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                    </div>
                                    <div class="form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">تخفیفای باحالتو به من ایمیل کن</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="signup">ثبت نام</button>
                                    <button type="submit" class="btn btn-primary">انصراف</button>
                                  </form>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="login">
                                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                  <div class="form-group">
                                  <label for="exampleInputEmail1">آدرس ایمیل</label>
                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل خود را وارد کنید">

                                  </div>
                                  <div class="form-group">
                                  <label for="exampleInputPassword1">رمز عبور</label>
                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="رمز عبور">
                                  </div>
                                  <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">منو یادت باشه</label>
                                  </div>
                                  <div> <span class="help-block"><?php echo $login_err; ?></span></div>
                                  <button type="submit" class="btn btn-primary" name="login">ورود</button>
                                  <button type="submit" class="btn btn-primary">انصراف </button>
                                  </form>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">:(  انصراف</button>
                        <button type="button" class="btn btn-primary save">:) تائید</button>
                    </div> -->
                </div>
            </div>
        </div>

