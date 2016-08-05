<?php 

require '../app/start.php';

if (!empty($_POST)) {
	$label = $_POST['label'];
	$title = $_POST['title'];
	$slug = $_POST['slug'];
	$body = $_POST['body'];

	$inserPage = $db->prepare("
		INSERT INTO pages (label,title,slug,body,created) VALUES (:label,:title,:slug,:body,NOW())

		");
	$inserPage->execute([
		'label'=>$label,
		'title'=>$title,
		'slug'=>$slug,
		'body'=>$body,
		]);
	header('Location:'.BASE_URL.'admin/list.php?meg=New Page Added');
}

require VIEW_ROOT.'admin/add.php';