<?php
namespace Tree\Console;

use Illuminate\Console\Command;
use Tree\TreeServiceProvider as Tree;

class TreeCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'baum';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Get Tree version notice.';

	/**
	 * Execute the console command.
	 *
	 * @return void
	 */
	public function fire() {
		$this->line('<info>Tree</info> version <comment>' . Tree::VERSION . '</comment>');
		$this->line('A Nested Set pattern implementation for the Eloquent ORM.');
		$this->line('<comment>Copyright (c) 2013 Estanislau Trepat</comment>');
	}

}
