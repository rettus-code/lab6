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
<script src="node_modules/particles.js/particles.js"></script>
<script src="node_modules/particles.js/demo/js/app.js"></script>
<body>
    <div id="loadingDiv">
        <div class="loader spinner"></div>
    </div>
    <?php include('include/header.php'); ?>
    <section class="heroimage">
        <div id="particles-js">
            <div class="heroitems">
                <div class="container">
                    <h1>Our Rooms</h1>
                    <p>Discover World's #1 Five Star Hotel.</p>
                    <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                </div>
            </div>
        </div>    
    </section>
    <div class="clearfix"></div>
    <main>
        <section class= "main-padding">
            <div class="container main-grid">
                <div class="sideleft">
                    <h4 class="sub-heading">
                        STAY WITH OUR LUXURY ROOMS
                    </h4>
                    <h2 class="heading">Stay and Enjoy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga eveniet! Qui delectus tempore amet!</p>
                    <p><a class="button">More about us</a></p>
                </div>
                <div class="sideright">
                    <img src="images/img_7.jpg" width="100%" alt= "Read More Image">
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class = "main-padding" class ="bg-color">
            <div class="container">
                <div class="feature">
                    <h4 class = "sub-heading">OUR LUXURY ROOMS</h4>
                    <h2 class = "heading">FEATURED ROOMS</h2>
                    <div class="feature-image">
                        <img src = "images/img_1.jpg">
                        <img src = "images/img_3.jpg">
                        <img src = "images/img_11.jpg">
                        <img src = "images/img_12.jpg">
                        <img src = "images/img_16.jpg">
                        <img src = "images/img_14.jpg">
                    </div>
                </div>
                <div class="feature-image"></div>
            </div>
        </section>
        <div class="clearfix"></div>
        <?php include('include/subscribe.php'); ?>
    </main>
    <?php include('include/footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>  
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/scrollreveal/dist/scrollreveal.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/main.js"></script> 
    <script src="node_modules/particles.js/particles.js"></script>
    <script src="node_modules/particles.js/demo/js/app.js"></script>
    <script src="js/pageloader.js"></script>
    <script src="js/lightbox.js"></script>
    
</body>
</html>
