<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 11.04.2020
 * Time: 14:19
 */

class Controller_mail extends Controller
{
    var $model_mail=NULL;
    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_mail = new Model_mail();
    }

    function action_dialog()
    {
        $data=null;
        $this->view->generate('view_dialog.php', 'view_form.php',$data);
    }

    function action_index()
    {
        $data=null;
        $this->view->generate('view_mail.php', 'view_form.php',$data);
    }
}