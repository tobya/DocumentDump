<?php

namespace Tobya\Documentdump\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \tobya\DocumentDump\DocumentDump
 */
class DocumentDump extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tobya\Documentdump\DocumentDump::class;
    }
}
