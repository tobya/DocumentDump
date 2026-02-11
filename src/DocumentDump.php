<?php

namespace Tobya\Documentdump;

use Tobya\Docto\CLITool;

class DocumentDump extends CLITool {



    public function run() {
        // bcsdumprec.exe -O c:\BCSSERVER\RecipeDiff\Recipes_Doc\ --DAYS 5  -M -N  -S false
        $cmdline = $this->build_commandline();
        echo $cmdline;

    }

    public function output($value){
        return $this->Parameter('-O',$value);
    }

    public function getEXEPath()
    {
        return config('documentdump.path');
    }


}
