<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class DefaultController
{
	protected $viewFile = 'default';
	
	public function indexAction()
	{
		$defaultModel = new DefaultModel();
		$viewValues['test'] = $defaultModel->test();
		$viewRender = new ViewRender();
		$viewRender->assignValues($viewValues);
		$viewRender->setViewFile($this->viewFile);
		$viewRender->render();
	}
}