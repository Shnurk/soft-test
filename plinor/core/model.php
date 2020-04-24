<?php
class Model
{

    var $db=NULL;
    function __construct()
    {
        $this->db = new MySQL("localhost", "f0409849_plinor","plinor1","f0409849_plinor");
        $this->db->set_charset("utf8");
    }
}