<?php

class Site extends Controller {

    function Site()
    {
        parent::Controller();
            $this->load->library('sitemap'); 
    }
    
    function index()
    {
        // Show the index page of each controller (default is FALSE)
        $this->sitemap->set_option('show_index', true);

        // Exclude a list of methods from any controller
        $this->sitemap->ignore('*', array('view', 'create', 'edit', 'delete'));

        // Exclude this controller
        $this->sitemap->ignore('Site', '*'); 

        // Show the sitemap
        echo '<h1>Sitemap</h1>';
        echo $this->sitemap->generate();
    }
}