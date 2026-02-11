<?php

namespace Tobya\Documentdump;

use Tobya\Docto\CLITool;
use Illuminate\Support\Facades\Process;

class Documentdump extends CLITool {



    public function run() {
        // bcsdumprec.exe -O c:\BCSSERVER\RecipeDiff\Recipes_Doc\ --DAYS 5  -M -N  -S false
        $cmdline = $this->build_commandline();
        $result = Process::command( $cmdline)->run();
        echo $cmdline;
        echo $result->output();

    }

    public function output($value):Documentdump
    {
        return $this->Parameter('-O',$value);
    }

    public function connectionString($connString = null):Documentdump
    {
        if (is_null($connString)) {
            $connString = config('documentdump.connection_string');
        }
        
        return $this->Parameter('-C',$connString);
    }

    public function getEXEPath()
    {
        return config('documentdump.path');
    }


}
