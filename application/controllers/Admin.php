<?php

/**
 * Our homepage. Show the most recently added quote.
 * 
 * controllers/Admin.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $this->data['title'] = 'Quotations Maintenance';
	$this->data['pagebody'] = 'admin_list';
        $this->data['quotes'] = $this->quotes->all();
        
        
	$this->render();
    }

}

/* End of file Admin.php */
/* Location: application/controllers/Admin.php */