<?php
//***
//author:C.A.D. BONDJE DOUE
//description:
//created:2020-22-05_11:53:48
//copyright: IGKDEV &copy; 2011-2020 all rights reserved
//type: controller
//***

//
//controller code class declaration
//file is a part of the controller tab list
//

///<summary></summary>
class balafon_wikipage extends IGKApplicationController {
	public function getName(){return get_class($this);}
	protected function InitComplete(){
		parent::InitComplete();
		//please enter your controller declaration complete here

	}
	///<summary> init target node </summary>
	protected function initTargetNode(){
		$node =  parent::initTargetNode();
		return $node;
	}
	protected function getArticleData($file){
		$g = $this->getArticlesDir();
		$c = substr($file, strlen($g));
		$p = [
			"/license.html"=>function(){
			return ["copyright"=>"2011-".date("Y")." &copy; IGKDEV"];
			}, 
			"/version.html"=>function(){
				return [];
			}
		];
		if (isset($p[$c])){
			$fc = $p[$c];
			return $fc();
		}

		return [];
	}
	//----------------------------------------
	//Please Enter your code declaration here
	//----------------------------------------

	///<summary>override to handle your custom view mecanism</summary>
	//public function View(){
	//	parent::View();
	//}
}