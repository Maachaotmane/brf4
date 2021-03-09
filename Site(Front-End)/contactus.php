<!DOCTYPE html>
<html lang="en">
<?php
include 'include/meta.php'; ?>
<title>Contact Us</title>

<body>
    <?php include 'include/header.php'; ?>
    <div class="espace">
        <div class="block1">
            <center>
                <h2>Contact Us</h2>
            </center>
        </div>
        <div id="form">
            <input type="text" placeholder="Nom complete" name="Nom complet" id="name">
            <input type="text" placeholder="Email" name="Email" id="mail">
            <input type="text" placeholder="Objet" name="objet" id="objet">
            <textarea name="Message" placeholder="Message..." id="Message" cols="30" rows="10"
                maxlength="500"></textarea>
            <br>
            <input type="button" id="Envoyer" value="Envoyer">
            <input type="reset" id="effacer" value="Vider" onclick="funcreset();">
        </div>
        <?php include 'include/footer.php'; ?>
</body>

</html>