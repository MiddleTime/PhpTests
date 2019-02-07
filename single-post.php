<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php foreach ($posts as $post): ?>
    <h1>Сообщение №<?php echo $post['id']; ?></h1>
    <hr/>
    <?php echo $post['content']; ?>
    <a href="<?php echo "http://localhost/MyPHPTests/post.php"; ?>">
        Вернуться к списку сообщений</a>
<?php endforeach; ?>