<!DOCTYPE HTML>

<html lang="en">

<head>
    <!-- Meta tags must be first in the html doc -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kayden Miller">
    <meta name="keywords" content="subcode, technologies, tech, weber, web, development">
    <meta name="description" content="Updated website for the companies Subcode Technologies">

    <title>Subcode Technologies</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Favicon -->
    <link rel="icon" href="resources/Subcode_Logo_Small.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'templates/header.php';?>

    <!-- Content -->
    <div class="content container">
        <div class="row">
            <div id="splash" class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6">
                <img width="100%" src="resources/SCT 4k 16x9 Logo.png" class="img-responsive">
            </div>
        </div>
        <?php include 'about.php';?>
        <?php include 'projects.php';?>
    </div>

    <?php include 'templates/footer.php';?>
</body>

</html>
