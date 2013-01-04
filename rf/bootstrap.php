<?php
class Bootstrap
{
	protected $configObj;
	
	public function init()
	{
		$configTxt = file_get_contents(CONFIG_FILE);
		$this->configObj = new SimpleXMLElement($configTxt);
	}
	
	public function getConfigObj()
	{
		return($this->configObj);
	}
}