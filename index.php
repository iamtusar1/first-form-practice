<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form Practice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .pass_div{
            position: relative;
        }
        .pass_div i {
            position: absolute;
            top: 42px;
            right: 15px;
            color: #7a7a7a;
            cursor: pointer;
        }

    </style>
  </head>
  <body>

    <div class="container">
        <div class="col-5 m-auto mt-3">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="text-white">Sing Up Form</h4>
                </div>
                <div class="card-body">
                    <form action="submit-form.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input style="border-color: <?=(isset($_SESSION["name_error"]))? 'red':'' ?>" name="name" type="text" placeholder="Enter Your Name" class="form-control">
                            <?php if(isset($_SESSION["name_error"])){ ?>
                                <strong class="text-danger"><?= $_SESSION["name_error"]; ?></strong>
                            <?php } unset($_SESSION["name_error"]) ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input style="border-color: <?=(isset($_SESSION["email_error"]))? 'red':'' ?>" name="email" type="text" placeholder="Enter Your Email" class="form-control">

                            <?php if(isset($_SESSION["email_error"])){ ?>
                                <strong class="text-danger"><?= $_SESSION["email_error"]; ?></strong>
                            <?php } unset($_SESSION["email_error"]) ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Number</label>
                            <input style="border-color: <?=(isset($_SESSION["number_error"]))? 'red':'' ?>" name="number" type="number" placeholder="Enter Your Number" class="form-control">

                            <?php if(isset($_SESSION["number_error"])){ ?>
                                <strong class="text-danger"><?= $_SESSION["number_error"]; ?></strong>
                            <?php } unset($_SESSION["number_error"]) ?>
                        </div>


                        <div class="mb-3 pass_div">
                            <label class="form-label">Password</label>
                            <input id="pass" style="border-color: <?=(isset($_SESSION["password_error"]))? 'red':'' ?>" type="password" name="password" class="form-control" placeholder="Enter Your Password" >
                            <i id="password_show" class="fa-regular fa-eye"></i>

                            <?php if(isset($_SESSION["password_error"])){ ?>
                                <strong class="text-danger"><?= $_SESSION["password_error"]; ?></strong>
                            <?php } unset($_SESSION["password_error"]) ?>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Are You?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Male" id="gender1">
                                <label class="form-check-label" for="gender1">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="Female" id="gender2">
                                <label class="form-check-label" for="gender2">Female</label>
                            </div>
                            <?php if(isset($_SESSION["gender_error"])){ ?>
                                <strong class="text-danger"><?= $_SESSION["gender_error"]; ?></strong>
                            <?php } unset($_SESSION["gender_error"]) ?>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn bg-primary text-white "><strong>Submit</strong></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#password_show').click(function(){
            var pass = document.getElementById('pass');

            if(pass.type == 'password'){
                pass.type = 'text';
            }else{
                pass.type = 'password';
            }
        })
    </script>
  </body>
</html>