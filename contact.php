<!DOCTYPE php>

<html>

<head>
    <!-- Meta tags must be first in the html doc -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Kayden Miller">
    <meta name="keywords" content="subcode, technologies, tech, weber, web, development">
    <meta name="description" content="Updated website for the companies Subcode Technologies">

    <title>Subcode Technologies - Contact Us</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Favicon -->
    <link rel="icon" href="resources/favicon.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'templates/header.php';?>

        <div class="content container">
            <div class="col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">
                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">*First Name</label>
                                        <input id="firstname" type="text" name="first-name" class="form-control" placeholder="First Name" required="required" data-error="First Name is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">*Last Name</label>
                                        <input id="lastname" type="text" name="last-name" class="form-control" placeholder="Last Name" required="required" data-error="Last Name is reqired.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email">*EMail</label>
                                <input id="email" type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Email is reqired.">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="message">*Your Message</label>
                                <textarea id="message" rows="5" type="text" name="message" class="form-control" required="required" data-error="You must enter something in the message box."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <button type="submit" class="btn btn-primary btn-submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php include 'templates/footer.php';?>
</body>

</html>