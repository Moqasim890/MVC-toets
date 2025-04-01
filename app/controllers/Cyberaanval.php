<?php

class Cyberaanval extends BaseController
{
    private $cyberaanvalModel;

    public function __construct()
    {
        $this->cyberaanvalModel = $this->model('CyberaanvalModel');
    }

    public function index()
    {
        $results = $this->cyberaanvalModel->getAllCyberaanvallen();

        $data = [
            'title' => 'Overzicht Cyberaanvallen',
            'cyberaanvallen' => $results
        ];

        $this->view('Cyberaanval/index', $data);
    }
}
