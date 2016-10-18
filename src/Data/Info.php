<?php # -*- coding: utf-8 -*-
/*
 * This file is part of the Inpsyde Inpsyde wonolog package.
 *
 * (c) Inpsyde GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Inpsyde\Wonolog\Data;

use Monolog\Logger;

/**
 * A log event with predefined level set to INFO.
 *
 * @author  Giuseppe Mazzapica <giuseppe.mazzapica@gmail.com>
 * @package wonolog
 * @license http://opensource.org/licenses/MIT MIT
 */
final class Info implements LogDataInterface {

	use LogDataTrait;

	/**
	 * @inheritdoc
	 */
	public function level() {

		return Logger::INFO;
	}
}