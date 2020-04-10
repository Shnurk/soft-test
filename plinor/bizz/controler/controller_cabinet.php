<?php

class Controller_Cabinet extends Controller{


    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_cabinet=new Model_user();
    }

    function action_view(){
        $data=1;
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }


    function action_index()
    {
        $data=null;
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }
}