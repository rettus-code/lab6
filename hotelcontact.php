<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/main.css">
    <title>Bellingham Hotel</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <div id="loadingDiv">
        <div class="loader spinner"></div>
    </div>
    <?php include('include/header.php'); ?>
    <section class="heroimage">
        <div class="heroitems">
            <div class="container">
                <h1>Reservation</h1>
                <p>Discover World's #1 Room For VIP</p>
                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <main>
        <section class= "main-padding">
            <div class="container main-grid">
                <div class="sideleft">
                    <p>Get inspiration for your next trip</p>
                    <img src = "./images/gallery2.jpeg" width = "100%" alt = "Read More Images">
                </div>
                <div class="sideright">
                    <h2>Thank You, Check your Email for Details</h2>
                    <p>Enjoy Your Stay</p>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class = "main-padding" class = "bg-color">
            <!-- this section kept for formatting only -->
        </section>
        <?php include('include/subscribe.php'); ?>
    </main>
    <?php include('include/footer.php'); ?>
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>  
    <script src="node_modules/jquery/dist/jquery.js"></script> 
    <script src="node_modules/popper.js/dist/popper.js"></script>  
    <script src="node_modules/particles.js/particles.js"></script>
    <script src="node_modules/particles.js/demo/js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/pageloader.js"></script>
</body>
</html>