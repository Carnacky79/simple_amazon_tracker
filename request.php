<?php
session_start();

$trackID = $_GET['track_radio'];
$url = "https://track.amazon.it/api/tracker/" . $trackID;

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($curl);
curl_close($curl);

$json = json_decode($resp);

$history = json_decode($json->eventHistory, true);

$_SESSION['history'] = $history;
?>

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
        <a class="navbar-brand" href="#">Amazon Tracking - RESULTS</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        </div>
    </div>
</nav>
<!-- Page content-->
<div class="container">
    <div class="text-center mt-5">
        <h1 class="mb-5">Click to download the JSON</h1>
        <form action="json.php" method="post">
            <button type="submit" class="btn btn-primary">Download JSON</button>
        </form>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
