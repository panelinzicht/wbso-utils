<?php
namespace Inzicht\WbsoUtils;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class GenerateWBSOReportCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'wbso:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the WBSO report for this project based on gitlab commits';

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
     * Defines the arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        // return array(
        //     array('queue', InputArgument::OPTIONAL, 'The name of the queue to clear.'),
        // );
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        list($endpoint, $projectId, $projectName) = Config::get('services.gitlab');

    }
}
