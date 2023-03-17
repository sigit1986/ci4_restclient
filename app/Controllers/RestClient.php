<?php

namespace App\Controllers;

require_once APPPATH . 'Libraries\CAS.php';


class RestClient extends BaseController
{
    // public function index()
    // {
    //     $client = \Config\Services::curlrequest();
    //     $url = "http://data.bkd.jambiprov.go.id/rest-data-pokok/198612172011011003";
    //     $response = $client->request('GET', $url);
    //     echo $response->getBody();
    // }


    function index()
    {
        $this->load->library('CAS');
        $this->cas->force_auth();
        $user = $this->cas->user();
        echo "Hello, $user->userlogin!";
    }
}
