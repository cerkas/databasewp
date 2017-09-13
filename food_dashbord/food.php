<?php
/*
Plugin Name: Fooddashbord
Description: Food
*/
const FOOD_PLUGIN_ID='food_1';
const FOOD_PLUGIN_NAME='FOOD';
const FOOD_CATEGORY_ID_OPTION='category_id';
const FOOD_TITLE='title';
const FOOD_DESCRIPTION='description';
const FOOD_IMG_URL='image_url';  


add_action('admin_menu','food_settings_menu');
function food_settings_menu()
{
	add_options_page(
		'Настройка плагина '.FOOD_PLUGIN_NAME,
		FOOD_PLUGIN_NAME,
		8,
		FOOD_PLUGIN_ID,
		'opinions_admin_menu'


		);
}
function opinions_admin_menu()
{
	include 'settings.php';
}
