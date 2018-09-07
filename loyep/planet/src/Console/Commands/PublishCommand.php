<?php

namespace Loyep\Planet\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'planet:publish {--force : Overwrite any existing files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the Planet resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->call('vendor:publish', [
            '--tag' => 'planet-config',
            '--force' => $this->option('force'),
        ]);

//        $this->call('vendor:publish', [
//            '--tag' => 'planet-assets',
//            '--force' => true,
//        ]);
//
//        $this->call('vendor:publish', [
//            '--tag' => 'planet-lang',
//            '--force' => $this->option('force'),
//        ]);
//
//        $this->call('vendor:publish', [
//            '--tag' => 'planet-views',
//            '--force' => $this->option('force'),
//        ]);

        $this->call('view:clear');
    }
}
