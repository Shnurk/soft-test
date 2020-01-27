<?php
class Model
{

    /*
        Модель обычно включает методы выборки данных, это могут быть:
            > методы нативных библиотек pgsql или mysql;
            > методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
            > методы ORM;
            > методы для работы с NoSQL;
            > и др.
    */

    // метод выборки данных
    var $db=NULL;
    function __construct()
    {
        $this->db = new MySQL("localhost", "root","root","plinor");
        $this->db->set_charset("utf8");
    }
}