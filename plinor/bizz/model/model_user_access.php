<?php


class Model_user_access extends Model
{


    public function user()
    {
        $hash = createHash(12);
       // $_POST=cleaner($_POST,$this->db);
        if ($_POST['submit'] == 'Вход')
            $data = $this->enter($hash);
       // else
        //    $data = $this->register($hash);
        return $data;
    }

    public function enter($hash)
    {
        $err[0]=0;
        if(($_POST['login']!='')&&($_POST['password']!='')){
        $login = $this->db->real_escape_string($_POST['login']);
        $result = $this->db->query("SELECT * FROM users WHERE login='$login' ");
        if (isset($result)){
            $result = mysqli_fetch_row($result);
            if ($_POST['password'] == $result['2']) {
                $myresult = $this->db->query("SELECT * FROM hash WHERE id_user={$result['0']} ");
                $myresult = mysqli_fetch_row($myresult);
                if (!isset($myresult)) {
                    $id = $result[0];
                    $myresult = $this->db->query("INSERT INTO hash (hash,id_user) VALUES ('$hash','$id')");
                }
                debug($myresult);
               setcookie("hash", $myresult['2'], time()+60*60*24*30,URL_BASE);
                $err[1] = "Добро пожаловать на портал";
                   $_SESSION['RULES']=$result[7];
              header("location: /plinor/main");

            } else {
                $err[0]=1;
                $err[1] = "Ошибка! Логин или пароль введены не верно.";
            }
            }
        else {
            $err[0]=1;
            $err[1] = "Ошибка! Логин или пароль введены не верно.";
        }
        }
        else{
            $err[0]=1;
            $err[1]="Ошибка! Логин или пароль введены не верно.";
        }
      return $err;
    }

    public function exit_cab()
    {
        $_SESSION["hash"]="";
        setcookie('hash', '', time()-3600,URL_BASE);
        header("location: /plinor/enter");
        session_destroy();
    }


/*
    public function register($hash)
    {
        $err[0]=0;
        if(($_POST['login']!='')&&($_POST['password']!='')){
        $login = $this->db->real_escape_string($_POST['login']);

        $result = $this->db->query("SELECT * FROM users WHERE login='$login' ");
        $result = mysqli_fetch_row($result);
        if ($result==NULL){
            if (($_POST['password'] == $_POST['pass_repeat'])) {
                $all = array();
                foreach ($_POST as $key => $value) {
                    if ($key != "enter") {
                        $all[$key] = $this->db->real_escape_string($value);
                    }
                }

                foreach ($all as $key=>$value){
                    $value[$key]=$this->db->htmlspecialchar($value[$key]);
                }

                $myresult = $this->db->query("INSERT INTO users (login,password,email) VALUES ('{$all['login']}','{$all['password']}','{$all['email']}')");
                $result = $this->db->query("SELECT id FROM users ORDER BY id DESC LIMIT 1");
                $result = mysqli_fetch_row($result);
                $id = $result[0];
                $myresult = $this->db->query("INSERT INTO hash (hash,id_user) VALUES ('$hash','$id')");
                setcookie("hash", $hash, time() + 3600 * 24, URL_BASE);
                $err[1] = "Добро пожаловать на портал";
            } else {
                $err[0]=1;
                $err[1] = "Ошибка! Пароли не совпадают.";
            }
        }
        else {
            $err[0]=1;
            $err[1] = "Ошибка! Логин уже занят.";
        }
        }
        else{
            $err[0]=1;
            $err[1] = "Ошибка! Минимум одно из полей не заполнено.";
        }
        return $err;
    }
*/

}

