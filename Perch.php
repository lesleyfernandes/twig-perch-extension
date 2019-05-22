<?php
class Twig_Perch_Extension extends Twig_Extension
{
	public function getFunctions()
	{
		return array(
			'perchRuntime' => new Twig_Function_Method($this, 'runtime'),
			'perchContent' => new Twig_Function_Method($this, 'content'),
			'perchPageAttributes' => new Twig_Function_Method($this, 'page_attributes'),
			'perchPagesTitle' => new Twig_Function_Method($this, 'pages_title'),
			'perchPagesNavigation' => new Twig_Function_Method($this, 'pages_navigation'),
		);
	}

	public function runtime()
	{
		return include('/path/to/runtime.php');
	}
	
	public function content($region)
	{
		return perch_content($region);
	}

	public function page_attributes()
	{
		return perch_page_attributes();
	}
	
	public function pages_title()
	{
		return perch_pages_title();
	}
	
	public function pages_navigation($nav)
	{
		return perch_pages_navigation($nav);
	}
	
	public function getName()
	{
		return 'perch';
	}
}
