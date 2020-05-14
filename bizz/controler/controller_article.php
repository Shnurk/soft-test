<?php

class Controller_Article extends Controller
{
    var $model_main = NULL;

    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_main = new Model_main();
    }

    function action_index()
    {
        $data = $this->model_main->model_load(0,$this->way[START_POSITION + 2]);
        $this->view->generate('view_post.php', 'view_form.php', $data);
    }
}