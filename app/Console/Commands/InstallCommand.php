<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loyep:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the loyep resources';

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
     */
    public function handle()
    {
//        $this->comment('Publishing Planet Assets / Resources...');
//        $this->callSilent('planet:publish');
////
//        $this->comment('Publishing Planet Service Provider...');
//        $this->callSilent('vendor:publish', ['--tag' => 'planet-provider']);
//
//        $this->registerNovaServiceProvider();
//
////        $this->comment('Generating User Resource...');
////        $this->callSilent('nova:resource', ['name' => 'User']);
////        copy(__DIR__ . '/stubs/user-resource.stub', app_path('Nova/User.php'));
////
//        $this->info('Planet scaffolding installed successfully.');
        //
    }
}
