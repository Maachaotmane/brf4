<!DOCTYPE html>
<html lang="en">
<?php
 require_once 'actions/connexion.php';
 include 'include/meta.php';
 ?>
<title>Home</title>

<body>
    <?php include 'include/header.php'; ?>
    <div class="banner_image">
        <div class="banner_content">
            <h1>Only I can change my life.<br> <span>No one can do it for me.<span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, neque.</p>
            <div class="btnn"><a href="#" onclick="document.getElementById('modal1').style.visibility='visible'">Sign
                    In</a></div>
        </div>
    </div>

    <div class="services">
        <h1 class="title">Our Campus</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quia, porro repellendus dolore
            repudiandae, accusantium corporis harum vel iste suscipit maiores provident ullam itaque libero minus
            nesciunt consequatur iusto numquam asperiores quod fugiat veniam blanditiis.</p>
        <div class="diff_services">
            <div class="diff_services_item">
                <img src="./images/services-1.png" alt="service_image">
                <h3 class="sub_title">Campus 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="diff_services_item">
                <img src="./images/services-2.png" alt="service_image">
                <h3 class="sub_title">Campus 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="diff_services_item">
                <img src="./images/services-3.png" alt="service_image">
                <h3 class="sub_title">Campus 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
    <script>
        // If user clicks anywhere outside of the modal, Modal will close

        var modal = document.getElementById('modal1');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.visibility = "hidden";
            }
        }
    </script>
</body>

</html>