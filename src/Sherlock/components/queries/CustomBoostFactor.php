<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-13
 * Time: 08:40 AM
 * Auto-generated by "generate.php"
 */
namespace sherlock\components\queries;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\queries\CustomBoostFactor query() query(\sherlock\components\QueryInterface $value)
 * @method \sherlock\components\queries\CustomBoostFactor boost_factor() boost_factor(float $value) Default: 3

 */
class CustomBoostFactor extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['boost_factor'] = 3;

		parent::__construct($hashMap);
	}
}

?>