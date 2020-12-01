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
                <h1>Our Rooms</h1>
                <p>Discover World's #1 Five Star Hotel.</p>
                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <main>
        <section class= "main-padding">
            <div class="container main-grid">
                <div class="sideleft">
                    <h2 class = "heading">Contact Form</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio</p>
                    <img src = "images/img_1.jpg" width = "100%" alt = "Read More Images">
                </div>
                <div class="sideright">
                    <form method="POST" action ="hotel.php" class = "contactform autocomplete">
                        <label for = "name">Name</label><br>
                        <input type="text" id = "name" name = "name"><br>
                        <label for = "phone">Phone</label><br>
                        <input type = "text" id = "phone" name = "phone"><br>
                        <label for = "email">Email</label><br>
                        <input type = "email" id = "email" name = "email"><br>
                        <label for = "message">Write Message</label><br>
                        <textarea id = "message" name = "message" rows="10" cols="30"></textarea><br>
                        <input type = "submit" value="Send Message" class="button"><br>
                    </form>
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