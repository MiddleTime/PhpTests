<?php
header("Content-Type: text/html;charset=utf-8");
?>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<h1>Список сообщений</h1>
<?php
foreach ($posts as $post):
    ?>
    <h3>Сообщение №<?php echo $post['id']; ?></h3>
    <?php echo $post['content']; ?>
    <a href="<?php echo "http://localhost/MyPHPTests/post.php?id=" . $post['id']; ?>">Подробнее</a>
    <hr/>
<?php endforeach; ?>