<?php if (!defined('APPLICATION')) exit();

$PluginInfo['MobileTweaks'] = array(
	'Name' => 'Mobile Tweaks',
	'Description' => 'Applies some small CSS tweaks to the standard Vanilla Mobile theme.',
	'Version' 	=>	 '1.0.2',
	'MobileFriendly' => TRUE,
	'Author' 	=>	 "Matt Sephton",
	'AuthorEmail' => 'matt@gingerbeardman.com',
	'AuthorUrl' =>	 'http://www.vanillaforums.org/profile/matt',
	'License' => 'GPL v2',
	'RequiredApplications' => array('Vanilla' => '>=2'),
);

class MobileTweaksPlugin implements Gdn_IPlugin {

	public function Base_Render_Before($Sender) {
		$this->_MobileTweaksSetup($Sender);
	}
	
	private function _MobileTweaksSetup($Sender) {
		if (IsMobile() && is_object($Sender->Head))
			$Sender->AddCssFile('mobiletweaks.css', 'plugins/MobileTweaks');
	}
	
	public function Setup() {
		return TRUE;
	}
	
}
?>