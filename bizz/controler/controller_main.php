<?php
class Controller_Main extends Controller
{
    var $model_main=NULL;
    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_main = new Model_main();
    }

    function action_them(){
        $data=$this->model_main->model_load($this->way[START_POSITION + 2],0);
        $data['them']=$this->way[START_POSITION + 2];
        $this->view->generate('view_main.php', 'view_form.php',$data);
    }

    function action_index()
    {
        $data=$this->model_main->model_load(0,0);
        if(isset($this->way[START_POSITION + 2]))
        $data['them']=$this->way[START_POSITION + 2];
        $this->view->generate('view_main.php', 'view_form.php',$data);
    }
}