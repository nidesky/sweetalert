<?php

namespace Nidesky\SweetAlert\Facades;

use Illuminate\Support\Facades\Facade;

class SweetAlert extends Facade
{
    protected static function getFacadeAccessor() { return 'sweetAlert'; }
}