<?php include "includes/header.php"; ?>

<?php 

                    
                    if(isset($_GET ['source'])) {

                        $source = $_GET ['source'];
                    } else {
                        $source = ' ';
                    }

                    switch($source) {

                        case 'add_student';
                        include "includes/add_teacher.php";
                        break;

                        case 'edit_student';
                        include "includes/edit_teacher.php";
                        break;

                        default:
                        include "includes/all_teachers.php";
                        break;
                    }
                    
                    ?>
<?php include "includes/footer.php" ?>