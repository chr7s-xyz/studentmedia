<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/function.php')
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT MEDIA</title>
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/stylePost.css">
    <!-- linking google icons & fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

</head>

<body>
    <?php
    include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/components/navbar.php');
    include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/components/sidebar.php');

    include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/user/post.php');

    include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/components/rightSidebar.php');



    ?>

    <script src="js/index.js"></script>
</body>

</html>