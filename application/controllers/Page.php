<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function init_page($page) {
        $this->load->view('header_view');
        $this->load->view('sidebar_view');
        foreach ($page as $p) {
            $this->load->view($p['view'], $p['data']);
        }
        $this->load->view('footer_view');
    }

    public $api_url = "https://indonesia-covid-19.mathdro.id/api/";

    public function index()
    {
        redirect('page/dashboard');
    }

    public function dashboard()
    {
        $page = array();
        $data = array();
        $url = $this->api_url;
        $dashboard_data = json_decode($this->exec($url));
        $data['data'] = $dashboard_data;
        array_push($page, array('view' =>  "dashboard/dashboard_view", 'data' => $data));
        $this->init_page($page);
        
    }

    public function exec($url)
    {
        // persiapkan curl
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url);

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // tutup curl 
        curl_close($ch);      

        // menampilkan hasil curl
        return $output;
    }

    
}
