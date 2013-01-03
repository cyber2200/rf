<?php
/**
 * This file handles the retrieval and serving of news articles
 */
class DefaultController
{
	protected $viewFile = 'default';
	
	public function indexAction()
	{
		$viewRender = new ViewRender();
		$viewRender->setViewFile($this->viewFile);
		$viewRender->render();
	}
}