<?php header("Content-Type: text/html;
charset=utf-8");?>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8"/>
<?php
if (!empty($_POST['data'])) {
echo 'Форма отправлена';
// код обработки данных формы
}
?>
<html>
<body>
<form action="POST" action="<?php echo $_SERVER
['PHP_SELF']; ?>">
<input type="text" name="data" type="text"
placeholder="Введите строку" />
<button type="submit">Отправить</button>
</form>
</body>
</html>