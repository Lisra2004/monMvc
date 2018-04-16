<?php

namespace Controller;

use Controller\DefaultController;

class Dispatcher
{
	//receive roads list, with argument p
	public function dispatch($roads, $p)
	{

		$controller = new DefaultController();

		//find road depending on what is in the URL
		foreach($roads as $url => $method){
			if ($url == $p){
				return call_user_func([$controller, $method]);
			}
		}

		//if road no found --> 404.
		return call_user_func([$controller, "error404"]);
	}

}