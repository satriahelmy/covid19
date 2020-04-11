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

    public $api_url = "https://covid19.mathdro.id/api";

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
        $confirmed_array = array();
        $recovered_array = array();
        $deaths_array = array();

        $countries = json_decode($this->exec($url."/countries"));
        $confirmed = json_decode($this->exec($url."/confirmed"));
        $recovered = json_decode($this->exec($url."/recovered"));
        $deaths = json_decode($this->exec($url."/deaths"));

        foreach ($confirmed as $row) 
        {
            $array_confirmed[$row->iso3] = 
        }

        foreach ($confirmed as $key => $value) {
            # code...
        }
        
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
