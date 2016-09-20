<?php

namespace AdiFaidz\Clean\Console\Commands;

use Illuminate\Console\Command;

class MathPlus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'math:plus {x} {y}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add two numbers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $x = $this->argument('x');
      $y = $this->argument('y');

      if(is_numeric($x) && is_numeric($y)){
        $this->info($x + $y);
      }else{
        $this->error('Enter numbers la, deyy macha apa da');
      }
    }
}
