<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.11.2019
 * Time: 1:52
 */

class Controller_List extends Controller
{
    var $model_list = NULL;
    public function __construct($way)
    {
        parent::__construct($way);
        $this->model_list = new Model_list();
    }

    function add_elements($table){

        if(isset($this->way[4])){
        if($this->way[4]=='save')
        $this->model_list->add_data($table);}
    }

    function action_tech(){
        if($_SESSION['RULES']<3){
            header("location:".URL_BASE."/404");
      }
        else{
        $page="tech";
        $table="technic";
        $this->action_index($table,$page);
        $this->add_elements($table);}
    }

    function action_user(){
        if($_SESSION['RULES']<3)
            header("location:".URL_BASE."/404");
        else{
        $page="user";
        $table="users";
        $this->action_index($table,$page);
        $this->add_elements($table);}
    }

    function action_order(){
        if($_SESSION['RULES']<3)
            header("location:".URL_BASE."/404");
        else{
        $page="order";
        $table="oper_it";
        $this->action_index($table,$page);
        $this->add_elements($table);}
    }

    function action_index($table,$page)
    {
        if($_SESSION['RULES']<3)
            header("location:".URL_BASE."/404");
        else{
        $way = $this->way;
        $option = 'list';
        if (isset($way[4])) {
            if (($way[4] == 'add')&&($_SESSION['RULES']>3))
                $option = 'add';
        }
        $data['data']=$this->model_list->take_data($table,"");
        $data['page']=$page;
        $data['option']=$option;
        $this->view->generate('view_listadd.php', 'view_form.php', $data);
    }
    }
}