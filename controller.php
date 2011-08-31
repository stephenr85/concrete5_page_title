<?php  defined('C5_EXECUTE') or die(_("Access Denied."));

/**
 * Displays the page name, a custom attribute, or a specific override.
 * @package Page Title
 * @author Stephen Rushing
 * @category Packages
 * @copyright  Copyright (c) 2011 Stephen Rushing. (http://www.esiteful.com)
 */
class PageTitlePackage extends Package {

	protected $pkgHandle = 'page_title';
	protected $appVersionRequired = '5.4.0';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("Displays the page name, a custom attribute, or a specific override.");
	}
	
	public function getPackageName() {
		return t("Page Title");
	}
	
	public function install() {
		$pkg = parent::install();
		
		BlockType::installBlockTypeFromPackage('page_title', $pkg);	
	}
	
	public function upgrade(){
		parent::upgrade();
		
			
			
	}
}