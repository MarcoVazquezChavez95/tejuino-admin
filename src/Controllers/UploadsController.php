<?php

namespace Tejuino\Admin\Controllers;

use Illuminate\Http\Request;
use Tejuino\Admin\Helpers\Files;

class UploadsController extends AdminController
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function postImage(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response(['message' => 'Invalid file'], 400);
        }

        $ext = strtolower(pathinfo($request->file('file')->getClientOriginalName(), PATHINFO_EXTENSION));
        if (!in_array($ext, ['jpg', 'jpeg', 'png'])) {
            return response(['message' => 'Invalid format'], 400);
        }

        $newFile = Files::save($request->file('file')->getRealPath(), $ext, 'uploads', 'image_');

        return response([
            'filename' => $newFile,
            'url' => url('files/uploads/' . $newFile)
        ]);
    }

}
