<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SBAdminController extends Controller
{
    public function index($page = 'index')
    {
        $views = "sb-admin.%s";
        $template = sprintf($views, $page);
        $layout = sprintf($views, "layout");

        $params = [
            'template' => $template,
            'layout' => $layout,
            'sections' => [
                'header' => 'header',
                'content' => 'content'
            ]
        ];

        return view($template, $params);
    }
}
