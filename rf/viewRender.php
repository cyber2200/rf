<?php
class ViewRender
{
	protected $file;
	protected $values;
	protected $layout;
	
	public function setViewFile($file)
	{
		$this->file = $file;
	}
	
	public function assignValues($inp)
	{
		$this->values = $inp;
	}
	
	public function setLayout($layout)
	{
		$this->layout = '../application/views/layout/' . $layout . '.html';
	}
	
	public function render()
	{
		foreach ($this->values as $k => $v)
		{
			$$k = $v;
		}
		
		if (isset($this->layout))
		{
			$viewFile = '../application/views/' . $this->file . '.html';
			include($this->layout);
		}
		else
		{
			include('../application/views/' . $this->file . '.html');
		}
	}
}