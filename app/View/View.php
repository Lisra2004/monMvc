<?php

namespace View;

class View
{
	//static page for 1 line calling
	//call page.php, title page, variable if necessary
	public static function show($page, $title, array $vars = null)
	{
		//if complementary informations
		if (!empty($vars)){
			extract($vars);
		}

		//page with or without .php
		$page = str_replace(".php", "", $page);

		include("app/templates/base.php");
	}

}