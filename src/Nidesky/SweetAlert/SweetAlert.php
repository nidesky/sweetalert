<?php

namespace Nidesky\SweetAlert;

use Illuminate\Support\Facades\Session;

class SweetAlert
{
    public function alert($title, $msg = '')
    {
        Session::flash('sweetAlert', compact('title', 'msg'));
    }

    public function success($title, $msg = '')
    {
        $type = 'success';
        Session::flash('sweetAlert', compact('title', 'msg', 'type'));
    }

    public function error($title, $msg = '')
    {
        $type = 'error';
        Session::flash('sweetAlert', compact('title', 'msg', 'type'));
    }

    public function css()
    {
        echo '<link href="'. asset('/nidesky/sweet-alert/sweetalert.css') .'" type="text/css" rel="stylesheet">'.PHP_EOL;
    }

    public function js()
    {
        echo '<script src="'. asset('/nidesky/sweet-alert/sweetalert.min.js') .'"></script>'.PHP_EOL;
    }
}