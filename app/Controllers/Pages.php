<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{

    const SITENAME = 'English Club';

    public function index()
    {
        $data['title'] = 'Acceuil || '.pages::SITENAME;
        $data['activemenu'] = 'home';
        echo view('template/header', $data);
        echo view('pages/home', $data);
        echo view('template/footer', $data);
    }

    public function about()
    {
        $data['title'] = 'A Propos || '.pages::SITENAME;
        $data['activemenu'] = 'about';
        echo view('template/header', $data);
        echo view('pages/about', $data);
        echo view('template/footer', $data);
    }

    public function event()
    {
        $data['title'] = 'Evernement || '.pages::SITENAME;
        $data['activemenu'] = 'event';
        echo view('template/header', $data);
        echo view('pages/event', $data);
        echo view('template/footer', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact || '.pages::SITENAME;
        $data['activemenu'] = 'contact';
        echo view('template/header', $data);
        echo view('pages/contact', $data);
        echo view('template/footer', $data);
    }
}
