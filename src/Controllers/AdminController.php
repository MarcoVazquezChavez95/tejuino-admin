<?php

namespace Tejuino\Admin\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AdminController extends BaseController
{

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    protected $section = 'Home';
    protected $subsection = '';
    protected $base = '/admin/';

    protected function view($view, $parms = [])
    {
        $viewParms = array_merge($parms, [
            'section' => $this->section,
            'subsection' => $this->subsection,
            'base' => $this->base
        ]);

        return view('admin.' . $view, $viewParms);
    }

}
