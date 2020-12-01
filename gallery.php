<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel = "stylesheet" href = "css/main.css">
    <title>Rooms | Bellingham Hotel</title>
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
        <section class = "main-padding" class = "bg-color">
            <div class="container main-grid">
                <div class="container-gallery gallery">
                        <div class="item">
                            <a href="images/Gallery/gallery (1).jpeg" data-caption="image caption 1">
                            <img src="images/Gallery/gallery (1).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (2).jpeg" data-caption="image caption 2">
                            <img src="images/Gallery/gallery (2).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (3).jpeg" data-caption="image caption 3">
                            <img src="images/Gallery/gallery (3).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (4).jpeg" data-caption="image caption 4">
                            <img src="images/Gallery/gallery (4).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (5).jpeg" data-caption="image caption 5">
                            <img src="images/Gallery/gallery (5).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (6).jpeg" data-caption="image caption 6">
                            <img src="images/Gallery/gallery (6).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (7).jpeg" data-caption="image caption 7">
                            <img src="images/Gallery/gallery (7).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (8).jpeg" data-caption="image caption 8">
                            <img src="images/Gallery/gallery (8).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (9).jpeg" data-caption="image caption 9">
                            <img src="images/Gallery/gallery (9).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (10).jpeg" data-caption="image caption 10">
                            <img src="images/Gallery/gallery (10).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (11).jpeg" data-caption="image caption 11">
                            <img src="images/Gallery/gallery (11).jpeg"alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/Gallery/gallery (12).jpeg" data-caption="image caption 12">
                            <img src="images/Gallery/gallery (12).jpeg"alt="">
                            </a>
                        </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <div  class="pagination flex-wrap"> 
            <div  class="container">     
                <div  class="row">       
                    <div  class="col-md-12">    
                        <nav aria-label="Page navigation example">            
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="gallery.php" tabindex="-1">Previous</a></li>  
                                <li class="page-item active"><a class="page-link" href="gallery.php">1</a></li> <li   class="page-item"><a   class="page-link" href="gallery1.php">2</a></li>
                                <li class="page-item"><a class="page-link" href="gallery1.php">Next <a><li>             
                            </ul>              
                        </nav>       
                    </div>   
                </div> 
            </div> 
        </div>
        <?php include('include/subscribe.php'); ?>
    </main>
    <?php include('include/footer.php'); ?>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>  
    <script src="node_modules/jquery/dist/jquery.js"></script> 
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.js" async></script>
    <script src="js/pageloader.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>