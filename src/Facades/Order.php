<?php

/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Aimeos (aimeos.org), 2019-2023
 */


namespace Aimeos\Shop\Facades;


/**
 * Returns the order frontend controller
 */
class Order extends \Illuminate\Support\Facades\Facade
{
	/**
	 * Returns a new order frontend controller object
	 *
	 * @return \Aimeos\Controller\Frontend\Order\Iface
	 */
	protected static function getFacadeAccessor()
	{
		return 'aimeos.frontend.order';
	}
}
