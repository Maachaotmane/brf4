<!DOCTYPE html>
<html lang="en">
<?php
 include 'include/meta.php'; ?>
<title>Contact Us</title>
<style>
    form {
        width: 90%;
        margin: 20px auto;
    }

    input,
    textarea {
        display: block;
        padding: 8px 16px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 10px;
        border: 3px solid #ccc;
        outline: none !important;
    }

    .valid {
        border-color: #36cc36;
    }

    .invalid {
        border-color: orange
    }

    input+p {
        font-size: 0.9em;
        font-weight: bold;
        margin: 0 10px;
        text-align: center;
        color: orange;
        opacity: 0;
        height: 0;
    }

    input.invalid+p {
        opacity: 1;
        height: auto;
        margin-bottom: 20px;
    }
</style>

<body>
    <?php include 'include/header.php'; ?>
    <div class="espace">
        <div class="block1">
            <center>
                <h2>Contact Us</h2>
            </center>
        </div>
        <div id="form">
            <form>
                <input type="text" placeholder="Nom complete" name="Nomcomplet">
                <p>Username must be and contain 5-12 characters</p>

                <input class="ss" type="text" placeholder="Email" name="Email">
                <p>Email invalid, e.g. me@mydomain.com</p>

                <input class="ss" type="text" placeholder="telephone" name="telephone">
                <p>Telephone invalid</p>

                <input type="text" placeholder="Objet" name="objet">

                <textarea name="Message" placeholder="Message..." cols="30" rows="10" maxlength="500"></textarea>
                <br>
                <center> <input type="button" id="Envoyer" value="Envoyer"></center>
                <center><input type="reset" id="effacer" value="Vider" onclick="funcreset();"></center>
            </form>

        </div>
        <?php include 'include/footer.php'; ?>
        <script>
            const inp_field = {

                Nomcomplet: /^[a-z\d]{3,12}$/i,
                Email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
                telephone: /^\d{11}$/
            }

            //spaces are not allowed in range
            //select all the input fields and add an onkeyup event listener to them

            const validate = (field, regex) => {
                regex.test(field.value) ? field.className = 'valid' : field.className = 'invalid';
            }

            let keys = document.querySelectorAll('input');
            keys.forEach(item => item.addEventListener(
                'keyup', e => {
                    validate(e.target, inp_field[e.target.attributes.name.value])
                }
            ));
            //document.addEventListener('click', () => console.log('click'));
        </script>

</body>

</html>