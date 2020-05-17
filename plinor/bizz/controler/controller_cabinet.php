<?php

class Controller_Cabinet extends Controller{


    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_cabinet=new Model_user();
    }

    function action_view(){
        $data['settings']=0;
        if(isset($this->way[START_POSITION + 2])&&($_SESSION['RULES']>=3))
            $object=$this->way[START_POSITION + 2];
        else{
         if(isset($_SESSION['RULES']))
            $object=null;
            else
            header("location:".URL_BASE."/404");
        }
        $data['person']=$this->model_cabinet->find_person($object);
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }

    function action_change(){
        $data['settings']=1;
        if(isset($this->way[START_POSITION + 2])&&($_SESSION['RULES']>=4))
            $object=$this->way[START_POSITION + 2];
        else{
         if(isset($_SESSION['RULES']))
            $object=null;
            else
            header("location:".URL_BASE."/404");
        }
        $data['profile']=$this->model_cabinet->find_person(null);
        $data['person']=$this->model_cabinet->find_person($object);
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }

    function action_save(){


        if($_SESSION['RULES']<4){
            $data['profile']=$this->model_cabinet->find_person(null);
            if($this->way[START_POSITION + 2]==$data['profile'][0]){
                $this->model_cabinet->save_person($this->way[START_POSITION + 2]);
            }
            else
                header("location:".URL_BASE."/404");
        }
        else {
            $this->model_cabinet->save_person($this->way[START_POSITION + 2]);
        }
    }

    function action_index()
    {
        $data=null;
        $this->view->generate('view_cabinet.php', 'view_form.php', $data);
    }
}