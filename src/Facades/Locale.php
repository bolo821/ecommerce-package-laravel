<?php

/**
 * @license MIT, http://opensource.org/licenses/MIT
 * @copyright Aimeos (aimeos.org), 2019-2023
 */


namespace Aimeos\Shop\Facades;


/**
 * Returns the locale frontend controller
 */
class Locale extends \Illuminate\Support\Facades\Facade
{
	/**
	 * Returns a new locale frontend controller object
	 *
	 * @return \Aimeos\Controller\Frontend\Locale\Iface
	 */
	protected static function getFacadeAccessor()
	{
		return 'aimeos.frontend.locale';
	}
}
