<?php include("../include/conn.php") ?>

<?php include("../pages/header.php") ?>

<?php include("../pages/navbar.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']  ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']  ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>

            <?php include("../pages/register.php") ?>
        </div>
        <?php include("../pages/table.php") ?>

    </div>
</div>

<?php include("../pages/footer.php") ?>