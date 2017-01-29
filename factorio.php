<!DOCTYPE php>

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

        <script language="php" src="script/factorio_server.php"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'template/header.php';?>

        <!-- Server Content -->
        <div class="content container">
            <div class="row">
                <div id="Server Controls" class="col-xs-offset-1 col-xs-10">
                    <button class="btn btn-primary" onClick="
                    <?php
                        shell_exec("/home/scripts/factorio_load_latest.sh");

                        echo "Success!";
                    ?>
                    ">Start Server Latest</button>
                </div>
            </div>
        </div>

        <?php include 'templates/footer.php';?>
    </body>
</html>