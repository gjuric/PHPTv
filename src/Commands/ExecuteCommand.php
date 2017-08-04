<?php 

namespace PHPTv\Commands;

use PHPTv\BaseCommand;
use PHPTv\Exception;

class ExecuteCommand extends BaseCommand
{
	/** 
     * Execute the command
     * 
     * @return void
     */
	public function execute()
	{	
		$input = $this->cli->input('> ');
		$inputString = $input->prompt();

		echo $inputString;
	}
}