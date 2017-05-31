<?php
    include 'header.php';
 ?>
   
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="jumbotron">
                    <h2>User Credentials Required</h2>
                    <p></p>
                    </div>
                </div>
            </div>

            <?php
                if (isset($_SESSION['id'])) {
                    echo '<div class="alert alert-dismissible alert-success">
                        <strong>You are already logged in!</strong> <a href="user.php">Click here for User Profile</a> 
                    </div>';
                } else {
                    echo '<div class="alert alert-dismissible alert-danger">
                        <strong>You are not logged in!</strong>
                    </div>';
                }
            ?>
            <!-- USER LOGIN FORM -->
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-horizontal" action="includes/login.inc.php" method="POST">
                        <h1>Login</h1>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="uid" placeholder="User Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="password" name="pwd" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">LOGIN</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <hr>
            <!-- USER SIGNUP FORM -->
            <div class="row">
                <div class="col-sm-12">
                    <form class="form-horizontal" action="includes/signup.inc.php" method="POST">
                        <h1>Sign Up</h1>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="first" placeholder="First Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="last" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="uid" placeholder="User Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="password" name="pwd" placeholder="Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="password" name="c_pwd" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>Password must be atleast 8 characters and include special character!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">SIGN UP</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>