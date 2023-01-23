<?php

namespace Tejuino\Admin\Controllers;
use Illuminate\Http\Request;

interface CrudController
{

    public function index();

    public function list(Request $request);

    public function update(Request $request, $model);

}
