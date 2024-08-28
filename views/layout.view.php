<?php require "partials/head.php"; ?>
<div class="wrapper">
    <?php require "partials/side.php"; ?>
    <div id="body" class="active">
        <?php require "partials/nav.php"; ?>
                    <?php require $view; ?>
    </div>
</div>
<?php require "partials/foot.php"; ?>
<?php //require $view 
?>
<?php //require "partials/foot.php"; 
?>