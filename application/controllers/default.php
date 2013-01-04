<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class DefaultController
{
	protected $viewFile = 'default';
	protected $bootstrapObj;
	
	public function setBootstrap($bootstrapObj)
	{
		$this->bootstrapObj = $bootstrapObj;
	}
	
	public function indexAction()
	{
		$viewValues['testXml'] = $this->bootstrapObj->getConfigObj();
		$defaultModel = new DefaultModel();
		$viewValues['test'] = $defaultModel->test();
		$viewRender = new ViewRender();
		$viewRender->assignValues($viewValues);
		$viewRender->setViewFile($this->viewFile);
		$viewRender->render();
	}
}