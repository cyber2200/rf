<?php
class ViewRender
{
	protected $file;
	protected $values;
	
	public function setViewFile($file)
	{
		$this->file = $file;
	}
	
	public function assignValues($inp)
	{
		$this->values = $inp;
	}
	
	public function render()
	{
		foreach ($this->values as $k => $v)
		{
			$$k = $v;
		}
		include('../application/views/' . $this->file . '.html');
	}
}