<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-19
 * Time: 08:26 PM
 * Auto-generated by "generate.filters.php"
 */
namespace sherlock\components\filters;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\filters\HasParent parent_type() parent_type(string $value)
 * @method \sherlock\components\filters\HasParent query() query(\sherlock\components\QueryInterface $value)

 */
class HasParent extends \sherlock\components\BaseComponent implements \sherlock\components\FilterInterface
{
	public function __construct($hashMap = null)
	{

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = NULL;
		return $ret;
	}

}

?>