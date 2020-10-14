
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h1>contact us</h1>
                        </div>
                        <hr>
                        <?php
                            $Msg="";
                            if(isset($_GET['error'])){
                                $Msg="please fill in the blank";
                               echo "<div class='alert alert-danger'>".$Msg."</div>";
                            }
                            
                            if(isset($_GET['success'])){
                                $Msg="your messege has been sent";
                                echo "<div class='alert alert-success'>".$Msg."</div>";
                            }
                        
                        ?>
                        <div class="card-body">
                            <form action="form data page.php" method="POST">
                                <input type="text" class="form-control mb-2" name="userName" placeholder="type your name">
                                <input type="email" class="form-control mb-2" name="userEmail" placeholder="type your email">
                                <input type="text" class="form-control mb-2" name="userSubject" placeholder="type your subject">
                                <textarea class="form-control mb-2" id="" cols="30" rows="6" name="userComment" placeholder="type your massege"></textarea>
                                <button type="submit" class="btn btn-primary" name="btn_send">send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>

