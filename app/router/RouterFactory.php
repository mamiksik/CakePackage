<?php

namespace Cake\Routing;

use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return \Nette\Application\IRouter
	 */
	public function createRouter()
	{
	/*	$router = new RouteList();
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;*/

        $router = new RouteList();
        $router[] = new Route('<presenter>/<action>[/<id>]', array(
            'module' => 'Public',
            'presenter' => 'Homepage',
            'action' => 'default',
        ));
        return $router;

	}

}
