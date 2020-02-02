<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 23.05.2019
 * Time: 19:04
 */

class Model_main extends Model
{
    public function model_load($tag,$where)
    {
        $cond='';
        if($tag!=0){
            
        }
        if ($where != 0)
            $cond = "WHERE id=" . $where;
        else
            $cond = $cond.'';
        $result[0] = $this->db->query("SELECT * FROM article $cond");
        if (isset($_COOKIE['hash'])) {
            $hash = $_COOKIE['hash'];
            $result[1] = $this->db->query("select login, status from users where id in (select id_user from hash where hash='$hash')");
                if($result[1])
                    $result[1] = mysqli_fetch_row($result[1]);
        } else
            $result[1] = '';

        return $result;
    }
}