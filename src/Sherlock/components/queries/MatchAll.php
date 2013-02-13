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
 * @method \sherlock\components\queries\MatchAll boost() boost(float $value) Default: 1

 */
class MatchAll extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['boost'] = 1;

		parent::__construct($hashMap);
	}
}

?>