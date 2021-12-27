<?php require_once APP_ROOT."/views/layout/header.php"; ?>

    <?php foreach($data as $user) : ?>
        <h2><?php echo $user->email; ?></h2>
    <?php endforeach; ?>

<?php require_once APP_ROOT."/views/layout/footer.php"; ?>