<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css"/>
    <title>CV</title>
</head>

<body>

<?php include("navigation.php") ?>

<header>
    <div class="accueil">
        <div>
            <h1>Léna Pancher</h1>
            <div class="info">
                <a href="https://www.linkedin.com/in/lenapancher/" target="_blank" class="contact">
                    <img src="../image/linkedin.png" alt="linkedin" height="50px"><span
                            class="txt-contact">linkedin.com/in/lenapancher/</span></a>

                <div class="contact"><img src="../image/email.png" alt="email" height="50px"><span
                            class="txt-contact">lenapancher@gmail.com</span></div>
                <div class="contact"><img src="../image/phone.png" alt="telephone" height="50px"><span
                            class="txt-contact">06 48 31 49 73</span></div>
            </div>
        </div>
        <div><img src="../image/photoMoi.png"></div>
    </div>
</header>

<div id="propos">
    <?php include("aPropos.php") ?>
</div>

<div id="formations">
    <?php include("formation.php") ?>
</div>

<div id="projets">
    <?php include("projets.php") ?>
</div>

<div id="experiences">
    <?php include("experiences.php") ?>
</div>

<div id="competences">
    <?php include("competences.php") ?>
</div>

<div id="interet">
    <?php include("interet.php") ?>
</div>

</body>
</html>
