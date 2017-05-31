<?php
    include 'header.php';
 ?>
<?php
if (isset($_SESSION['id'])) {
    echo $_SESSION['id'];
} else {
    header("Location: login_fail.php");
}

?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Price Chart</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <h1>Your Portfolio</h1>
                <h2>$5058.78</h2>
                <p>Total Balance</p>
            </div>
        </div>
        <hr>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "Bithereum",
            //backgroundColor: 'rgb(255, 255, 255)',
            borderColor: 'rgb(255, 255, 255)',
            data: [25, 20, 30, 60, 45, 70, 84.71],
        }]
    },

    // Configuration options go here
    options: {
        legend: {labels:{fontColor:"white", fontSize: 18}},
        scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "white",
                        fontSize: 18,
                        stepSize: 10,
                        beginAtZero:true
                    }
                }],
                xAxes: [{
                    ticks: {
                        fontColor: "white",
                        fontSize: 14,
                        stepSize: 10,
                        beginAtZero:true
                    }
                }]
            }
    }
});
    </script>
    <div class="container" style=" padding-bottom: 50px">
        <div class="row">
            <div class="col-sm-12" style="margin-left: 50%;">
                <form action="includes/logout.inc.php">
                    <button class="btn btn-danger">LOGOUT</button>
                </form>
            </div>
        </div>
    </div>
        
    </body>
</html>