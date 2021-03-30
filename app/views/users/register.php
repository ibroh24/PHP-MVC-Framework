<?php
   require APPROOT . '/views/includes/header.php';
?>

<div id="login">
        <h3 class="text-center text-white pt-5">Signup form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box register-box" class="col-md-12 p-4 bg-light shadow">
                    <form id="register-form" method="POST" action="<?php echo URLROOT; ?>/users/register">
                            <h3 class="text-center text-primary">Signup</h3>

                            <div class="form-group">
                                <label for="email" class="text-primary">Email:</label><br>
                                <input type="text" name="email" id="username" placeholder="Email" class="form-control">
                                <span class="invalidFeedback" style="color:red">
                                    <?php echo $data['emailError']; ?>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="username" class="text-primary">Username:</label><br>
                                <input type="text" name="username" id="username" placeholder="Username" class="form-control">
                                <span class="invalidFeedback" style="color:red">
                                    <?php echo $data['usernameError']; ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-primary">Password:</label><br>
                                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                                 <span class="invalidFeedback" style="color:red">
                                    <?php echo $data['passwordError']; ?>
                                </span>
                            </div>
                            <div class="form-group">
                            <label for="password" class="text-primary">Confirm Password:</label><br>
                               <input type="password" placeholder="Confirm Password" name="confirmPassword" class="form-control">
                                <span class="invalidFeedback" style="color:red">
                                    <?php echo $data['confirmPasswordError']; ?>
                                </span>
                            </div>
                            <center>
                            <div class="form-group">
                              <button id="submit" type="submit" class="btn btn-primary btn-lg" value="submit">Register</button>
                            </div>
                            </center>
                           
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
   require APPROOT . '/views/includes/footer.php';
?>
