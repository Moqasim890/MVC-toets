<?php

class Zangeressen extends BaseController
{
    private $zangeressenModel;

    public function __construct()
    {
        $this->zangeressenModel = $this->model('ZangeressenModel');
    }

    public function index()
    {
        /**
         * Je roept de method getAllSmartphones aan van de smartphoneModel class
         */
        $results = $this->zangeressenModel->getAllSingers();
        
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'zangeressen' => $results
        ];

        $this->view('zangeressen/index', $data);
    }
}