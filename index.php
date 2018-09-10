<?php
session_start();

if (isset($_SESSION['isUser21AndOver'])) {
    header("location: home.php");
}

if (isset($_POST['validateAge'])) {

    if (!isset($_SESSION['LOGIN_ERROR'])) {
        $_SESSION['isUser21AndOver'] = 1;
        header("location: home.php");
    }
}

?>

<html>
    <head>
        <title>La Noche Tequila</title>
        <meta charset="UTF-8">
        <meta http-equiv="Cache-control" content="no-cache">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/css/pretty-checkbox.min.css" />
        <link rel="stylesheet" href="/css/main.css" />
        <script type="text/javascript" src="/js/lib/jquery-3.2.0.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    <body>
        <div class="outer">
            <div class="middle">
                <div class="inner">
                    <div class="circle">

                        <p align="center">
                            <img src="image/la-noche-tequila-logo.png" width="143" height="88" align="absmiddle" alt="la noche tequila logo" />
                            <h3 align="center">Premium Pomegranate Tequila</h3>
                        </p>
                        <p align="center">
                            <em>
                                By clicking the continue button you are confirming that you are of Legal Drinking age for you geographical area!
                            </em>
                        </p>
                        <?php echo (isset($_SESSION['LOGIN_ERROR'])) ? '<p class="error-bd">'.$_SESSION["LOGIN_ERROR"].'</p>' : '' ?>
                        <form class="age-gate-form" method="post">
                        
                            <div class="cta-wrapper">
                                <button class="button" type="submit" name="validateAge" value="Enter">Continue</button>
                            </div>
                            <p style="font-size: 0.6em; text-align: center;">© La Noche, Premium Tequila Liqueur</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</html>