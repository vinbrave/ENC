<?php
/**
 *
 */
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	
	public function index() {
    	$this->display(":index");
    }

}


