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
 * @method \sherlock\components\queries\Field field() field(string $value)
 * @method \sherlock\components\queries\Field query() query(string $value)
 * @method \sherlock\components\queries\Field boost() boost(float $value) Default: 2.0
 * @method \sherlock\components\queries\Field enable_position_increments() enable_position_increments(int $value) Default: 1
 * @method \sherlock\components\queries\Field default_operator() default_operator(string $value) Default: "AND"
 * @method \sherlock\components\queries\Field analyzer() analyzer(string $value) Default: "default"
 * @method \sherlock\components\queries\Field allow_leading_wildcard() allow_leading_wildcard(int $value) Default: 0
 * @method \sherlock\components\queries\Field lowercase_expanded_terms() lowercase_expanded_terms(int $value) Default: 1
 * @method \sherlock\components\queries\Field fuzzy_min_sim() fuzzy_min_sim(float $value) Default: 0.5
 * @method \sherlock\components\queries\Field fuzzy_prefix_length() fuzzy_prefix_length(int $value) Default: 2
 * @method \sherlock\components\queries\Field lenient() lenient(int $value) Default: 1
 * @method \sherlock\components\queries\Field phrase_slop() phrase_slop(int $value) Default: 10
 * @method \sherlock\components\queries\Field analyze_wildcard() analyze_wildcard(int $value) Default: 1
 * @method \sherlock\components\queries\Field auto_generate_phrase_queries() auto_generate_phrase_queries(int $value) Default: 0
 * @method \sherlock\components\queries\Field rewrite() rewrite(string $value) Default: "constant_score_default"
 * @method \sherlock\components\queries\Field quote_analyzer() quote_analyzer(string $value) Default: "standard"
 * @method \sherlock\components\queries\Field quote_field_suffix() quote_field_suffix(string $value) Default: ".unstemmed"

 */
class Field extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{
		$this->params['boost'] = 2.0;
		$this->params['enable_position_increments'] = 1;
		$this->params['default_operator'] = "AND";
		$this->params['analyzer'] = "default";
		$this->params['allow_leading_wildcard'] = 0;
		$this->params['lowercase_expanded_terms'] = 1;
		$this->params['fuzzy_min_sim'] = 0.5;
		$this->params['fuzzy_prefix_length'] = 2;
		$this->params['lenient'] = 1;
		$this->params['phrase_slop'] = 10;
		$this->params['analyze_wildcard'] = 1;
		$this->params['auto_generate_phrase_queries'] = 0;
		$this->params['rewrite'] = "constant_score_default";
		$this->params['quote_analyzer'] = "standard";
		$this->params['quote_field_suffix'] = ".unstemmed";

		parent::__construct($hashMap);
	}
}

?>