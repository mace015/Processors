<?php namespace Muilman\Processors;

use Illuminate\Support\ServiceProvider;

class ProcessorServiceProvider extends ServiceProvider {

	protected $commands = array(
		'Muilman\Processors\InitProcessor',
		'Muilman\Processors\MakeProcessor'
	);

	public function register()
	{
		$this->commands($this->commands);
	}

}
