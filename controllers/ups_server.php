<?php

/**
 * ups_server controller.
 *
 * @category   Apps
 * @package    ups_server
 * @subpackage Views
 * @author     Your name <your@e-mail>
 * @copyright  2013 Your name / Company
 * @license    Your license
 */

///////////////////////////////////////////////////////////////////////////////
// C L A S S
///////////////////////////////////////////////////////////////////////////////

/**
 * ups_server controller.
 *
 * @category   Apps
 * @package    ups_server
 * @subpackage Controllers
 * @author     Your name <your@e-mail>
 * @copyright  2013 Your name / Company
 * @license    Your license
 */

class ups_server extends ClearOS_Controller
{
    /**
     * ups_server default controller.
     *
     * @return view
     */

    function index()
    {
        // Load dependencies
        //------------------

        $this->lang->load('ups_server');
        
        $views =  = array(
            'ups_server/nut_conf/summary',
            'ups_server/ups_conf/summary_view',
            'ups_server/upsd_conf/summary_view',
            'ups_server/upsd_users/users',
            'ups_server/upsmon_conf/summary'
            );

            //this for nut_conf/summary 
        //$views = 'ups_server/nut_conf/summary';

        // Load views
        //-----------
        $this->page->view_forms($views,lang('ups_server_app_name'));
    }
    
}