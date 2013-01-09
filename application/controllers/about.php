<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class AboutController
{
	protected $viewFile = 'about';
	protected $bootstrapObj;
	
	public function setBootstrap($bootstrapObj)
	{
		$this->bootstrapObj = $bootstrapObj;
	}
	
	public function indexAction()
	{	
		$configObj = $this->bootstrapObj->getConfigObj();
		$viewValues['appUrl'] = (string)$configObj->appUrl;
		$viewRender = new ViewRender();
		$viewRender->assignValues($viewValues);
		$viewRender->setLayout('layout');
		$viewRender->setViewFile($this->viewFile);
		$viewRender->render();
	}
}