<?php 

$link = mysqli_connect('localhost', 'root', '', 'food_1'); 

if(mysqli_connect_errno()) 
{ 
echo 'Ошибка подключения к базе данных('.mysqli_connect_errno().'):'.mysqli_connect_error(); 
exit(); 

}
?>
<?php 
require 'connect.php';
$category_id = $_POST['category_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$image_url = $_POST['image_url'];

$insert_sqli = "INSERT INTO food (category_id, title, description, image_url" .
"VALUES('{$category_id}', '{$title}', '{$description}', '{$image_url}');";
mysqli_query($insert_sqli);
?>
<h1>Настройка плагина <?= FOOD_PLUGIN_NAME ?></h1>
 <?php 
 if (isset ($_POST[FOOD_CATEGORY_ID_OPTION]) && isset($_POST[FOOD_CATEGORY_ID_OPTION])&& isset($_POST[FOOD_TITLE])&& isset($_POST[FOOD_DESCRIPTION]) && isset($_POST[FOOD_IMG_URL]))
 {
 	update_option(FOOD_CATEGORY_ID_OPTION,$_POST[FOOD_CATEGORY_ID_OPTION]);
 	update_option(FOOD_CATEGORY_ID_OPTION,$_POST[FOOD_CATEGORY_ID_OPTION]);
 	update_option(FOOD_TITLE,$_POST[FOOD_TITLE]);
 	update_option(FOOD_TITLEOD_DESCRIPTION,$_POST[FOOD_DESCRIPTION]);
 	update_option(FOOD_IMG_URL ,$_POST[FOOD_IMG_URL ]);
echo '<div class="updated">Save table</div>';

 }
 ?>
/*?>
<?php 
mysqli_query("INPUT `food` SET 
(`text`) 
VALUES 
('".$_POST['text']."')"); 
?>
<?php
   $posts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish'
   AND post_type='post' ORDER BY comment_count DESC LIMIT 0,4")
?>
<?php
function create_table() {
	global $wpdb;

	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

	$table_name = $wpdb->get_blog_prefix() . 'food_1';
	$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";

	$sql = "CREATE TABLE {$table_name} (
	id  bigint(20) unsigned NOT NULL auto_increment,
	address varchar(255) NOT NULL default '',
	alert varchar(20) NOT NULL default '',
	meta longtext NOT NULL default '',
	PRIMARY KEY  (id),
	KEY alert (alert)
	)
	{$charset_collate};";

	dbDelta($sql);
}

create_table();