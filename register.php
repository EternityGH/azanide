<?php   
    session_start();

    if (isset($_SESSION['login'])) {
        header('location: index.php');
    }


    $name = '';
    $mail = '';

    if (isset($_SESSION['data'])) {
        # code...
        $name = $_SESSION['data']['name'];
        $mail = $_SESSION['data']['mail'];
    }
    
    include 'HF/header.php';

?>
        <div class="row row1" >
            <div class="col-md-6" style="border: 1px solid #ddd">
                <h1><center style="color: black; padding-top: 50%">REGISTER</center></h1>
            </div>
            <div class="col-md-6" style="border: 1px solid #ddd; " >
                <div class="container">
                    <div class="form-sign-up" style=" padding: 15%; padding-top: 30%;">
                        <form class="my-form" action="controller/register_process.php" method="post">
                            <div class="form-group">
                                <input type="text" style="display: none;" name="txtErr">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control <?php if(!empty($_SESSION['error']['error_name'])) echo 'is-invalid'?>" name="txtName" value="<?=$name?>" placeholder="Full Name">
                                <?php 
                                    if(!empty($_SESSION['error']['error_name'])){
                                ?>
                                    <p style="color: red">
                                        <?=$_SESSION['error']['error_name']?>
                                    </p>
                                <?php
                                    }

                                ?>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control <?php if(!empty($_SESSION['error']['error_mail'])) echo 'is-invalid'?>" name="txtMail" value="<?=$mail?>" placeholder="Email">
                                <?php 
                                    if(!empty($_SESSION['error']['error_mail'])){
                                ?>
                                    <p style="color: red">
                                        <?=$_SESSION['error']['error_mail']?>
                                    </p>
                                <?php
                                    }

                                ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control <?php if(!empty($_SESSION['error']['error_pass'])) echo 'is-invalid'?>" name="txtPass" placeholder="Password">
                                <?php 
                                    if(!empty($_SESSION['error']['error_pass'])){
                                ?>
                                    <p style="color: red">
                                        <?=$_SESSION['error']['error_pass']?>
                                    </p>
                                <?php
                                    }

                                ?>
                            </div>
                            <div class="form-group">
                                <label>Re-Password</label>
                                <input type="password" class="form-control <?php if(!empty($_SESSION['error']['error_repass'])) echo 'is-invalid'?>" name="txtRepass" placeholder="Re-Password">
                                <?php 
                                    if(!empty($_SESSION['error']['error_repass'])){
                                ?>
                                    <p style="color: red">
                                        <?=$_SESSION['error']['error_repass']?>
                                    </p>
                                <?php
                                    }

                                ?>
                            </div>
                            
                            <div class="form-group">
                                <label>Gender</label></br>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="RadMale" name="radGender" class="custom-control-input" checked value="0">
                                  <label class="custom-control-label" for="RadMale" >Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="RadFemale" name="radGender" class="custom-control-input" value="1">
                                  <label class="custom-control-label" for="RadFemale">Female</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5"></div>
                                <div class="col-3">
                                    <button type="submit" class="btn btn-danger" name="register">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


            
<?php     
include('HF/footer.php');

if(isset($_SESSION)){
    unset($_SESSION['data']);
    unset($_SESSION['error']);

}

?>