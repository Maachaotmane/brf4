<!DOCTYPE html>
<html lang="en">
<?php include 'include/meta.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<title>Dashboard</title>

<body>
    <div class="dash-content">
        <?php
                include 'include/sidebar.php';
                include 'actions/connexion.php';
        ?>

        <div class="contenuu">
            <div class="contenuu-nav">
                <h2 class="title_list">Dash Board</h2>
            </div>

            <?php
                                 $stm = 'select * from students ';
                                 $fetch = $connection->query($stm);
                                $row = $fetch->fetch_assoc();
                                $class_num = $row['class'];
            ?>
            <div class="grid">
                <div class="static staf-stat">
                    <div class="l">
                        <span><?php  echo $class_num; ?></span>
                        <span>Staff</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book c-staf"></i>
                    </div>
                </div>
                <div class="static etud-stat">
                    <div class="l">

                    <?php
                                 $stm = 'SELECT COUNT(`idstd`) as students_number FROM students';
                                 $fetch = $connection->query($stm);
                                $row = $fetch->fetch_assoc();
                                $std_num = $row['students_number'];
                    ?>


                        <span><?php echo $std_num; ?></span>
                        <span>etudiant</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-home c-etud"></i>
                    </div>
                </div>
            </div>
            <div class="painel" style="font-weight: 75%;">
                <div class="painel-body">
                    <table class="decoration">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th class="hidden">Email</th>
                                <th>class</th>
                                <th>Actions</th>
                            </tr>
                            <?php
                                $pub_id = $_GET['id'];
                                 $stm = "select * from students WHERE pub_id = '$pub_id'";
                                 $fetch = $connection->query($stm);
                                while ($row = $fetch->fetch_assoc()) {
                                    ?>
                            <tr>
                                <td><?php $id = $row['idstd'];
                                    echo $id; ?></td>
                                <td><?php $name = $row['full_name'];
                                    echo $name; ?></td>
                                <td class="hidden"><?php $email = $row['email'];
                                    echo $email; ?></td>
                                <td ><?php $class = $row['class'];
                                    echo $class; ?></td>
                                <?php
                                }?>
                                <td>
                                   <a href="#" class="btn btn-red open-modal" onclick="view('<?php echo $name; ?>','<?php echo $email; ?>','<?php echo $class; ?>')" ><i class="fa fa-eye" style="color: blue;"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal is-visible" id="modal1">
                <div class="modal-dialog">
                    <form action="" class="form">
                        <div class="modal-header">
                            <div class="modal-title">My Info</div>
                        </div>
                        <div class="modal-content">
                            <div class="group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name_edited" value="" placeholder="Name">
                            </div>
                            <div class="group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" value="" id="email_edited" placeholder="Email">
                            </div>
                            <div class="group">
                                <label for="select">class</label>
                                <input type="text" name="class" value="" id="edited_class" placeholder="Name">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal1');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.visibility = "hidden";
    }
}
</script>
<script src="js/action.js"></script>
</body>

</html>