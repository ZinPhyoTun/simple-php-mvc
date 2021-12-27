<?php require_once APP_ROOT."/views/layout/header.php" ?>

<?php foreach($data as $post) : ?>
    <h2><?php echo $post->title; ?></h2>
<?php endforeach; ?>

<?php require_once APP_ROOT."/views/layout/header.php" ?>