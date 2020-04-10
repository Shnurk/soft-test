<?php

class Controller_Cabinet extends Controller{


    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_cabinet=new Model_user();
    }

    function action_view(){
        $data['settings']=0;
        $data['person']=$this->model_cabinet->find_person();
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }

    function action_change(){
        $data['settings']=1;
        $data['person']=$this->model_cabinet->find_person();
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }

    function action_save(){
        $this->model_cabinet->save_person();
    }

    function action_index()
    {
        $data=null;
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }
}