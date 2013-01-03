<?php
class ViewRender
{
	protected $file;
	
	public function setViewFile($file)
	{
		$this->file = $file;
	}
	
	public function render()
	{
		include('./application/views/' . $this->file . '.html');
	}
}