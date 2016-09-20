<?php

namespace AdiFaidz\Clean\Console\Commands;

use Illuminate\Console\Command;

class CleanServe extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:serve {--port=8000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean cache files and serve the application';

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
      $this->call('clean:all');
      $this->call('serve',['--port' => $this->option('port')]);
    }
}
