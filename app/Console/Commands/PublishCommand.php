<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'loyep:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all of the Loyep resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
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
