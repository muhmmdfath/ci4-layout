<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('layout/page_layout', $data);
    }

    public function dashboard(): string
    {
        $data = [
            'title' => 'Dashboard Page'
        ];
        return view('pages/dashboard', $data);
    }

    public function input(): string
    {
        $data = [
            'title' => 'Input Page'
        ];
        return view('pages/input', $data);
    }
}
