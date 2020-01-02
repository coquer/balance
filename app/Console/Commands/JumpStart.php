<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class JumpStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    protected $signature = 'site:build';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Jump start your app with automated boilerplate stuff like running npm install, composer install and env file generation';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function executeCommand($command) {
        $process = new Process($command);
        $process->setTty(true);
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        echo $process->getIncrementalErrorOutput();
        echo $process->getOutput();
    }

    public function composerInstall() {
        $this->executeCommand(['composer', 'install']);
    }

    public function artisanPrepare() {
        $this->executeCommand(['cp', '.env.example', '.env']);
        $this->executeCommand(['php', 'artisan', 'key:generate']);
        $this->executeCommand(['php', 'artisan', 'storage:link']);
    }

    public function npmInstall(){
        $this->executeCommand(['npm', 'install']);
        $this->executeCommand(['npm', 'run:dev']);

    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->composerInstall();
        $this->artisanPrepare();
        $this->npmInstall();
    }
}
