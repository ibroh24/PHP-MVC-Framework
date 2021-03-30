<?php
   require APPROOT . '/views/includes/header.php';
     
if(isset($_SESSION['user_id'])) {
    header('location: ' . URLROOT . '/pages/index');
}else{

?>

 <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box register-box" class="col-md-12 p-4 bg-light shadow">
                    <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
                            <h3 class="text-center text-primary">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-primary">Email: *</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                                <span class="invalidFeedback" style='color:red'>
                                    <?php echo $data['emailError']; ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-primary">Password: *</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="invalidFeedback" style='color:red'>
                                    <?php echo $data['passwordError']; ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <!-- <label for="remember-me" class="text-primary"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br> -->
                                <br>
                                <center>
                                    <button id="submit" type="submit" name="submit" class="btn btn-primary btn-lg">Login</button>
                                </center>
                            </div>
                           
                        </form>
                        <!-- <div id="register-link" class="text-right ml-5">
                                <a href="signup" class="text-primary">Register here</a>
                            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
   require APPROOT . '/views/includes/footer.php';
?>

