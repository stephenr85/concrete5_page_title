<?php
	class PageTitleBlockController extends BlockController {
		
		protected $btDescription = "Displays the page name, a custom attribute, or a specific override.";
		protected $btName = "Page Title";
		protected $btTable = 'btPageTitle';
		protected $btInterfaceWidth = "500";
		protected $btInterfaceHeight = "150";
		
		
		function getTitle(){
			$c = Page::getCurrentPage();
				
			if(!empty($this->override)){
				$title = $override;
			}else if(!empty($this->tatHandle)){
				$title = $c->getCollectionAttributeValue($this->tatHandle);
			}
			
			if(empty($title)){
				$title = $c->getCollectionName();
			}
			if(empty($title)){
				$title = t('Page Title Placeholder');	
			}	
			return $title;			
		}
		
		
		function getAvailableAttributes(){
			$attrs = CollectionAttributeKey::getList();
			$opts = array();
			foreach($attrs as $attr){
				$opts[$attr->getAttributeKeyHandle()] = $attr->getAttributeKeyName();
			}
			return $opts;
		}
		
		function view(){
			$this->set('title', $this->getTitle());
		}
		
		function save($data){
			if(empty($data['override'])){
				$data['override'] = NULL;	
			}
			
			parent::save($data);
		}
		
	}
	
?>