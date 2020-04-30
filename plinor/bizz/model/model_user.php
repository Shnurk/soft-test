<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 07.04.2020
 * Time: 13:56
 */

class Model_user extends Model
{

<<<<<<< Updated upstream
    function find_person()
    {

=======
    function find_person($object)
    {

        if($object!=null){
            $myresult = $this->db->query("SELECT * FROM users WHERE id='$object'");
        }
        else{
>>>>>>> Stashed changes
        $result = $this->db->query("SELECT id_user FROM hash WHERE hash='{$_COOKIE["hash"]}'");
        $myresult = mysqli_fetch_row($result);
        if (isset($myresult)) {
            $myresult = $this->db->query("SELECT * FROM users WHERE id='$myresult[0]'");
<<<<<<< Updated upstream
        }
=======
        }}
>>>>>>> Stashed changes
        $myresult = mysqli_fetch_row($myresult);
        if (isset($myresult)) {
            return $myresult;
        }
    }



<<<<<<< Updated upstream
    public function save_person(){
=======
    public function save_person($object){
>>>>>>> Stashed changes
        $err[0]=0;
        $all = array();
        if(($_POST['login']!='')&&($_POST['password']!='')){
            $login = $this->db->real_escape_string($_POST['login']);
                    foreach ($_POST as $key => $value) {
                        if ($key != "enter") {
                            $all[$key] = $this->db->real_escape_string($value);
                        }
                    }

<<<<<<< Updated upstream
            $result = $this->db->query("SELECT id_user FROM hash WHERE hash='{$_COOKIE["hash"]}'");
            $myresult = mysqli_fetch_row($result);
            $all['avatar']=photo_save($_FILES['avatar']);
                debug("UPDATE users SET login='{$all['login']}',password='{$all['password']}',r_name='{$all['r_name']}',
    r_secname='{$all['r_secname']}', r_surname='{$all['r_surname']}',
     email='{$all['mail']}', mode={$all['mode']}, avatar='{$all['avatar'][0]}' where id=$myresult[0]");
                    $myresult = $this->db->query("UPDATE users SET login='{$all['login']}',password='{$all['password']}',r_name='{$all['r_name']}',
    r_secname='{$all['r_secname']}', r_surname='{$all['r_surname']}',
     email='{$all['mail']}', mode={$all['mode']}, avatar='{$all['avatar'][0]}' where id=$myresult[0]");
=======
          $id=$this->find_person($object);

            $all['avatar']=photo_save($_FILES['avatar']);
                    $myresult = $this->db->query("UPDATE users SET login='{$all['login']}',password='{$all['password']}',r_name='{$all['r_name']}',
    r_secname='{$all['r_secname']}', r_surname='{$all['r_surname']}',
     email='{$all['mail']}', mode={$all['mode']}, avatar='{$all['avatar'][0]}' where id=$id[0]");
>>>>>>> Stashed changes
                    $err[1] = "Добро пожаловать на портал";


                    }
        else{
            $err[0]=1;
            $err[1] = "Ошибка! Минимум одно из полей не заполнено.";
        }

<<<<<<< Updated upstream
        header("location: ".URL_BASE."/cabinet/view");
=======
        header("location: ".URL_BASE."/cabinet/view/".$object);
>>>>>>> Stashed changes

    }

}