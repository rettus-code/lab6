<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
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
                <div class="rooms">
                    <div class="rooms-pic-1">
                        <figure><img class = "img" src = "images/img_3.jpg"></figure><div class="rooms-body">
                            <h3 class = "rooms-heading">Luxury Executive Lounge</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                            <p><a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure><img class = "img" src = "images/img_1.jpg"></figure><div class="rooms-body">
                            <h3 class = "rooms-heading">Exquisite Presidential Suite</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                            <p><a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure><img class = "img" src = "images/img_5.jpg"></figure><div class="rooms-body">
                            <h3 class = "rooms-heading">Executive Club rooms Suite</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                            <p><a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure><img class = "img" src = "images/img_11.jpg"></figure><div class="rooms-body">
                            <h3 class = "rooms-heading">Mini Suite</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                            <p><a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure><img class = "img" src = "images/img_12.jpg"></figure><div class="rooms-body">
                            <h3 class = "rooms-heading">Murphy Room</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                            <p><a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a></p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure><img class = "img" src = "images/img_14.jpg"></figure><div class="rooms-body">
                            <h3 class = "rooms-heading">Deluxe Suite</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
                            <p><a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class = "newsletter">
            <div class="container newsletter-grid">
                <h1>Subscribe to Our Newsletter</h1>
                <form method="POST" action="newsletter.html" class="feedback autocomplete">
                    <input type = "email" placeholder="Enter Email..." id="subscribe">
                    <button type = "submit" class = "button">Subscribe</button>
                </form>
            </div>
        </section>
    </main>
    <footer class ="main-footer">
        <div class="container footer-grid">
            <div class="footer">
                <h4 class="sub-heading">CONNECT WITH US</h4>
                <p>24/7 Call us<a href ="#"> + 1360 650 9933</a></p>
            </div>
            <div class="footer">
                <h4 class="sub-heading">CONNECT WITH US</h4>
                <p>We are socialized. Follow us.</p>
            </div>
            <div class="footer">
                <h4 class="sub-heading">CONNECT WITH US</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio</p>
            </div>
        </div>
        <div class="copyright"><i class="far fa-copyright"></i>Copyright 2020 All rights reserved | Michael Rettus</div>
        <script> var date = document.lastModified; document.write(date); </script> 
    </footer>
    <div id ="RoomForm" class="modal fade">
    <div class="modal-dialog" role   ="document"> 
    <div class="modal-content"> 
    <div class="modal-header">
        <h1 class="modal-title">Reservation Form</h1> 
    </div> 
        <div class="modal-body"> 
    <form method = "POST" action = "booknow.php" class="formBook autocomplete"><!--  new   --> 
        <input type="hidden" name="_token" value="" > 
        <div class="row my-1" > 
            <div class="form-group col-md -6 my-1"> 
                <label class="form-label">Arrival Date</label> 
                <input type="date" class="form-control" id="bookDate" name="arrivedate"> 
            </div> 
            <div class="form-group col-md -6" >   
                <label class="form-label">Departure Date</label>
                <input type="date" class="form-control" id ="bookDated" name="departdate"> 
            </div> 
        </div> 
        <div class="row"> 
            <div class="form-group col-md -6 my-1"> 
                <label class="form-label">Room </label> 
                <select name="room" id="room" class="form-control"> 
                    <option selected>1 Room</option> 
                    <option>2 Room</option> 
                    <option>3 Room</option> 
                    <option>4 Room</option> 
                    <option>5 Room</option> 
                </select> 
            </div> 
            <div   class="form-group col-md -6" > 
                <label class="form-label">Guests</label> 
                    <select name="guest" value=""  id ="guest" class="form-control"> 
                        <option selected>1 Guest</option> 
                        <option>2 Guests</option> 
                        <option>3 Guests</option> 
                        <option>4 Guests</option> 
                        <option>5+ Guests</option> 
                    </select> 
                </div> 
            </div> 
            <div class="form-group my-1"> 
                <label class="form-label">Email</label> 
                <div> 
            <input type="email" class="form-control" id ="bookEmail" name="email" value=""> 
                </div> 
            </div> 
            <div class="form-group"> 
                <label class="form-label" for="message">Write a Note</label>      
                <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea> 
            </div> 
                <div class="my-4"> 
                    <button type="submit" class="button">RESERVE NOW</button> 
                </div> 
        </form> 
    </div> 
    </div> 
    </div> 
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/main.js"></script>   
    <script src="js/book.js"></script>   
    <script src="node_modules/jquery/dist/jquery.js"></script> 
    <script src="node_modules/popper.js/dist/popper.js"></script>  
    <script src="js/pageloader.js"></script>
    <script src="node_modules/particles.js/particles.js"></script>
    <script src="node_modules/particles.js/demo/js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>