<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function index()
    {
        $data = [
            'title' => 'Welcome to WebGIS DB'
        ];

        $this->load->view('landing/index', $data);
    }

    function about()
    {
        $data = [
            'title' => 'WebGIS DB'
        ];

        $this->load->view('landing/about', $data);
    }

    function webgis()
    {
        $data = [
            'title' => 'WebGIS DB'
        ];

        $this->load->view('landing/map', $data);
    }
    function aboutus()

    {
        $data = [
            'title' => 'WebGIS DB'
        ];

        $this->load->view('landing/aboutus', $data);
    }
}
    