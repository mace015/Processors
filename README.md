# Processor layer for Laravel
If there is one thing I hate, its cluttered controllers, to fix that problem in big applications, I came up with my own method/layer to put all the logic in: the processor layer!

Using this package is very simple!
	This package comes with 2 artisan commands;
		- processor:init - Creates the Processors folder in the App folder and 2 base classes inside the Processors folder.
		- make:processor - Creates a an empty processor.
	Calling a processor from anywhere is very simple;
		- Import the processor facade at the top: `use Processor;`.
		- Call a processor to be executed: `return Processor::init('TestProcessor', array('next' => 'home'))->function();`.

# Instalation
Installing this package is very simple;
	- Install the package with composer: `composer require muilman/processors`.
	- Add the service provider to Config/app.php: `'Muilman\Processors\ProcessorServiceProvider'`.
	- Optional: Add the Processors alias to the aliases in Config/app.php: `'Processor' => '\App\Processors\BaseProcessor',`.