<?php

namespace App\Controllers;
use App\Models\PortofolioModel;


class Home extends BaseController
{
    protected $portofolio;
    public function __construct()
    {
        $this->portofolio = new PortofolioModel();
    }
    public function portofolio(){
        $portofolio = $this->portofolio->findAll();
        $data = [
            'title' => 'portofolio',
            'title' => 'full_name',
            'title' => 'birth_date',
            'title' => 'age',
            'title' => 'phone_number',
            'title' => 'email',
            'title' => 'city',
            'portofolio' => $portofolio
        ];

        return view('body', $data);
    }
}
