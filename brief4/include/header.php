<nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"> <img style="height: 170%;margin-top:20px" src="images/logo.png">
    </div>
    <ul class="links">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./our_programs.php">Our Program</a></li>
        <li><a href="./contactus.php">Contact Us</a></li>
        <li><a href="#" onclick="document.getElementById('modal1').style.visibility='visible'">Sing In</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
</nav>
<div class="modal is-visible" id="modal1">
    <div class="modal-dialog">
        <form action="actions/login.php" method="post" class="form">
            <center>
                <div class="modal-header">
                    <div class="modal-title">Login</div>
                </div>
            </center>
            <div class="modal-content">
                <div class="group">
                    <label for="name">Email</label>
                    <input type="text" name="email" id="" placeholder="Email">
                </div>
                <div class="group">
                    <label for="email">Password</label>
                    <input type="password" name="password" id="" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer">
                <center><button type="submit"
                        style="width: 20%;height: 30px;color: white;background-color:#d41850;">Connexion</button>
                </center>
            </div>
        </form>
    </div>
</div>
<script>
    // If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById('modal1');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.visibility = "hidden";
        }
    }
</script>