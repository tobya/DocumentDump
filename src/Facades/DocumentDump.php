<?php

namespace tobya\DocumentDump\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \tobya\DocumentDump\DocumentDump
 */
class DocumentDump extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \tobya\DocumentDump\DocumentDump::class;
    }
}
