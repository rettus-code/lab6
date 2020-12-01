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
                <h1>Welcome</h1>
                <?php
                    include('include/config.php');
                    $email = $_POST['email'];
                    $sql = "SELECT * FROM subscribe WHERE email = '$email'";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result);
                    if($row['email']==$email){
                        ?>
                        <script>
                            confirm('Email Already Exist, Enter a New One.');
                            window.location = "index.php";
                        </script>
                        <?php
                    }
                    else {
                        $data = "INSERT INTO subscribe(email) values('$email')";
                        if(mysqli_query($con,$data)){
                            ?>
                                <script>
                                    confirm('Email Successfully Added, Thank you!');
                                    window.location = "contact.php";
                                </script>
                            <?php
                        }
                        else {
                            ?>
                                <script>
                                    alert('Email Could Not Be Added, Try Again!');
                                    window.location = "contact.php";
                                </script>
                            <?php
                        }
                    }
                ?>
                <p>Thanks for subscribing to our newsletter, User!</p>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <main>
        
    </main>
    <?php include('include/footer.php'); ?>
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script src="node_modules/popper.js/dist/popper.js"></script>  
    <script src="js/pageloader.js"></script>
    <script src="js/main.js"></script>
    <script src="node_modules/particles.js/particles.js"></script>
    <script src="node_modules/particles.js/demo/js/app.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>