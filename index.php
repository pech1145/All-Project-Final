<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>สร้างโพรไฟล์ผู้ใช้งาน </title>


    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-1" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt=""
             width="72" height="72">
        <h2>Create Profile </h2>
    </div>
    <div class="col-md-12 order-md-1">
        <h4 class="mb-3">INFO</h4>
        <form class="needs-validation" action="profile_check.php" method="get">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" name="firstname" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    <div class="invalid-feedback" style="width: 100%;">
                        Your username is required.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" name="country" id="country" required>
                        <option value="">Choose...</option>
                        <option>United States</option>
                        <option>Thailand</option>
                        <option>Chaina</option>
                        <option>Laos</option>
                        <option>Japan</option>
                        <option>America</option>
                        <option>Malaysia</option>
                        <option>Myanmar</option>
                        <option>Philippines</option>
                        <option>Singapore</option>
                        <option>Vietnam</option>
                        <option>Brunei</option>
                        <option>Cambodia</option>

                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">State</label>
                    <select class="custom-select d-block w-100" name="state" id="state" required>
                        <option value="">Choose...</option>
                        <option>California</option>
                        <option>Bangkok</option>
                        <option>Vientiane</option>
                        <option>Nay Pyi Taw</option>
                        <option>Singapore</option>
                        <option>Washington, D.C.</option>
                        <option>Tokyo</option>
                        <option>Hanoi</option>
                        <option>Bandar Seri Begawan</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Career</label>
                    <input type="text" class="form-control" name="career" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                        career code required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <h5 class="mb-3">Age</h5>
                        <input type="radio" name="age" value="yong"> 10 - 24<br>
                        <input type="radio" name="age" value="adult"> 25 - 40<br>
                        <input type="radio" name="age" value="Midage"> 41 - 59<br>
                        <input type="radio" name="age" value="elderly" checked> 60 Up<br>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h4><label for="cc-expiration">Free Time</label></h4>
                        <input type="radio" name="time" value="05.00 - 7.00<"> 05.00 - 7.00<br>
                        <input type="radio" name="time" value="11.00 - 13.00"> 11.00 - 13.00<br>
                        <input type="radio" name="time" value="16.00 - 18.00"> 16.00 - 18.00<br>
                        <input type="radio" name="time" value="20.00 - 22.00" checked> 20.00 - 22.00<br>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Health</button>
        </form>
    </div>
</div>

<footer class="my-4 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Exercise Health</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
</footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<script src="../../../../assets/js/vendor/holder.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';

        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>
</html>
