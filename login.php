<?php
    
    session_start();

    if (isset($_SESSION['login'])) {
        header('location: index.php');
    }

    include 'HF/header.php';
    
?>
        <div class="row row1" >
            <div class="col-md-6" style="border: 1px solid #ddd; padding-top: 2%">
                <h1><center style="color: black; padding-top: 40%">Login</center></h1>
            </div>
            <div class="col-md-6" style="border: 1px solid #ddd; padding-top: 5%">
                <div class="container">
                    <div class="form-sign-up">
                        <form class="my-form" action="controller/login_process.php" method="post">
                            
                            <div class="form-group div-thu-1">
                                <label>Email</label>
                                <input type="email" class="form-control" name="lg_email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="lg_password" placeholder="Password">
                            </div>
                            <?php
                            if (isset($_SESSION['Error_login'])) {
                            ?>
                            <p style="color: red"><?=$_SESSION['Error_login']?></p>
                            <?php
                            }
                            ?>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-2">
                                    <a href="register.php" class="btn btn-danger">Register</a>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-2">
                                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    

        <style>
            * {
                padding: 0;
                margin: 0;
            }

            body, html {
                width: 100%;
                height: 100%;
            }

            .navbar1{
                background-color: darkgrey !important;
                min-height: 30px;
            }

            .floatleft{
                padding: 10px;
                display: inline-block;
                padding-left: 40px;
                margin: 0px;
            }

            .floatleft p{
                font-size: 15px;
                margin: 0;
            }

            .floatright{
                display: inline-block;
                float: right;
                padding: 10px;
                padding-right: 40px;
            }

            .floatright p {
                display: inline;
                margin: 0;
                font-size: 16px;

                vertical-align: top;
            }

            .clear {
                clear: both;
            }

            .icon1{
                margin-top: 4px;
                font-size: 15px!important;
            }

            .carousel-inner img {
                width: 100%;
                height: 100%;
            }
            .form-sign-up{
                padding: 20%;
                padding-top: 30%;
            }
            .row1{
                margin-right: 0!important;
            }
            .head1{
                height: 30px; width: 100%;
                background: #cccccc;
            }
            .head2{
                padding-left: 250px;
            }
            .head3{
                padding-left: 400px; 
            }
            .dropdown:hover>.dropdown-menu {
                display: block;
                
            }
            .dropdown-menu {
                transition: 0.5s;
            }
        </style>

<?php 
include('HF/footer.php');

if(isset($_SESSION)){
    unset($_SESSION['Error_login']);
}

?>