<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Francesco Lombardi" />
    <title>Qapla - Amazon Tracking</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Amazon Tracking</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        </div>
    </div>
</nav>
<!-- Page content-->
<div class="container">
    <div class="text-center mt-5">
        <h1 class="mb-5">Select the Order to track</h1>
        <form style="width:250px; margin-left: auto; margin-right: auto" action="request.php" method="get">
            <div class="form-check my-4">
                <input class="form-check-input" type="radio" name="track_radio" id="track_radio_1" value="IT2244099822" >
                <label class="form-check-label" for="track_radio_1">
                    Track ID: IT2244099822
                </label>
            </div>
            <div class="form-check my-4">
                <input class="form-check-input" type="radio" name="track_radio" id="track_radio_2" value="IT2244032907">
                <label class="form-check-label" for="track_radio_2">
                    Track ID: IT2244032907
                </label>
            </div>
            <div class="form-check my-4">
                <input class="form-check-input" type="radio" name="track_radio" id="track_radio_3" value="977C90140032F" >
                <label class="form-check-label" for="track_radio_3">
                    Track ID: 977C90140032F
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
