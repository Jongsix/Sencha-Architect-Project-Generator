<?php
namespace Ext\form;

require_once(dirname(__FILE__).'/../container/Container.php');

use Ext\container\Container as Container;

class FieldContainer extends Container {

	public $combineErrors	=	NULL;
	public $combineLabels	=	NULL;
	public $componentCls	=	NULL;
	public $componentLayout	=	NULL;
	public $labelConnector	=	NULL;
	
	public function __construct(){
		parent::__construct();
	}
	
}