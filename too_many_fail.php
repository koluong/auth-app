<?php
    include 'header.php';
 ?>
<?php 
    include 'dba/dbh.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $uid = $_POST['uid'];
        $sql = "UPDATE user SET try=0 WHERE uid='$uid'";
        mysqli_query($conn, $sql);
    }
?>
        <div class="container">
            <div class="row" >
                <div class="col-sm-12">
                    <div class="jumbotron" style="margin-top: 15%;">
                        <h1 class="text-center">Too Many Failed Login Attempts</h1> <hr>
                        <form action="too_many_fail.php" method="POST" class="text-center">
                            <input type="text" name="uid" placeholder="User Name"> <br>
                            <button type="submit" class="btn btn-danger">RESET ATTEMPTS</button>
                        </form>
                        <div style="margin-top: 10%; margin-left: 44%">
                            <a href="index.php"><button class="btn btn-primary">Back to Home</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>