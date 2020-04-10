<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 19.11.2019
 * Time: 1:57
 */

class Model_list extends Model
{
    public function take_data($table,$where)
    {
        if($where!="")
            $where="WHERE ".$where;
        $data=$this->db->query("SELECT * FROM $table $where");
        $row=array();
        while($row[]=mysqli_fetch_row($data));
        $data=array_pop($row);
        return $row;
    }


    public function add_data($table){
        $all =array();
        $counter=0;
        foreach ($_POST as $key=>$value) {
            if($key!='submit'){
                if(is_array($value)) {
                    foreach ($value as $ki => $valu) {
                        $valu[$ki] = $this->db->real_escape_string($valu[$ki]);
                    }
                }
                $all[$key]=$value;}
        }
        foreach ($all as $key=>$value) {
            if($key!='submit'){
                if(is_array($value)){
                foreach ($value as $ki=>$valu){
                    $valu[$ki]=htmlspecialchars($valu[$ki]);
                }}
                $counter=count($all[$key]);
                $all[$key]=$value;}
        }
        for($i=0;$i<$counter;$i++){
            if($table=="users"){
                $log=generate("U",10);
                $pass=generate("P",10);
                $result = $this->db->query("INSERT INTO $table(login,password,r_name,r_surname,r_secname,email,mode) 
            VALUES('$log','$pass','{$all['r_name'][$i]}','{$all['r_surname'][$i]}','{$all['r_secname'][$i]}','{$all['email'][$i]}','{$all['type'][$i]}')");
            }
            if($table=="technic"){
                $result = $this->db->query("INSERT INTO $table(inv_id,model_full,model_short,serial_id,model_opt,model_cond,stg_name,model_work,model_reserve,amount,typ)
           VALUES('{$all['iid'][$i]}','{$all['md'][$i]}','{$all['cm'][$i]}','{$all['sid'][$i]}','{$all['cond'][$i]}','{$all['opt'][$i]}','{$all['storage'][$i]}','{$all['work'][$i]}','{$all['reserve'][$i]}','{$all['amount'][$i]}','{$all['type'][$i]}')");
             }
        }
        if($table=="technic"){
            header("location:".URL_BASE."/list/tech");
        }
        if($table=="users"){
            header("location:".URL_BASE."/list/users");
        }

    }
}