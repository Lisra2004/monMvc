<!DOCTYPE html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<title><?= $title ?></title>

    <meta name="..le-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <!--Global css-->
    <link type="text/css" rel="stylesheet" href="<?= BASE_URL ?>public/css/application.css" />
    <!--Object context menu css-->
    <link type="text/css" rel="stylesheet" href="<?= BASE_URL ?>public/css/contextmenu.css" />
    <!--Slider menu css-->
    <link type="text/css" rel="stylesheet" href="<?= BASE_URL ?>public/css/slider.css" />
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




    <!-- Complementary library -->
    <SCRIPT src="<?= BASE_URL ?>app/lib/jquery.browser.js"></SCRIPT>
    <SCRIPT src="<?= BASE_URL ?>app/lib/jquery-ui-1.8.23.custom.min.js"></SCRIPT>

    <!-- Functions -->
    <SCRIPT src="<?= BASE_URL ?>app/js/Slider.js"></SCRIPT>



</head>
<body>
    <header>
        <?php include "app/templates/navbar.php"?>
    </header>

    <?php include("app/templates/$page.php") ?>

</body>
</html>