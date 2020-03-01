<?php

namespace Src\Core\Service\View;

class Theme
{
	protected $data = [];

	public function getData()
	{
		return $this->data;
	}

	public function setData()
	{
		$this->data = $data;
	}

	public function header()
	{
		$this->loadTemplateFile('header');
	}

	public function footer()
	{
		$this->loadTemplateFile('footer');
	}

	private function loadTemplateFile($nameFile) 
	{
		$templateFile = ROOT_DIR . '/../Public/Templates/' . $nameFile . '.php';

		if (file_exists($templateFile))
		{
			require_once $templateFile;
		}
		else 
		{
			throw new \InvalidArgumentException(sprintf('View file %s does not exist!', $templateFile));
		}	
	}
}