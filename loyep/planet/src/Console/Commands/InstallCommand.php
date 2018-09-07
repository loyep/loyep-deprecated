<?php

namespace Loyep\Planet\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'planet:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the Planet resources';

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
        $this->comment('Publishing Planet Assets / Resources...');
        $this->callSilent('planet:publish');
//
        $this->comment('Publishing Planet Service Provider...');
        $this->callSilent('vendor:publish', ['--tag' => 'planet-provider']);

        $this->registerNovaServiceProvider();

//        $this->comment('Generating User Resource...');
//        $this->callSilent('nova:resource', ['name' => 'User']);
//        copy(__DIR__ . '/stubs/user-resource.stub', app_path('Nova/User.php'));
//
        $this->info('Planet scaffolding installed successfully.');
    }

    /**
     * Register the Nova service provider in the application configuration file.
     *
     * @return void
     */
    protected function registerNovaServiceProvider()
    {
        file_put_contents(config_path('app.php'), str_replace(
            "App\\Providers\EventServiceProvider::class," . PHP_EOL,
            "App\\Providers\EventServiceProvider::class," . PHP_EOL . "        App\Providers\PlanetServiceProvider::class," . PHP_EOL,
            file_get_contents(config_path('app.php'))
        ));
    }
}
