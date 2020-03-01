<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.05.2019
 * Time: 16:29
 */

namespace App\Models;


class unit
{
    private $base;

    /**
     * User constructor.
     * @param $base

     */
    public function __construct($base = null)
    {
        $this->base = $base;
    }


    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }


    public function createHash($leng)
    {
        $symbols = 'abdefhiknrstyzABDEFGHKNQRSTYZ1023456789';
        $numSymbol = strlen($symbols);
        $hash = '';
        for ($i = 0; $i < $leng; $i++) {
            $hash .= substr($symbols, rand(1, $numSymbol) - 1, 1);
        }
        return ($hash);
    }

    public function generate($what,$leng){
        $symbols = 'abdefhiknrstyz1023456789';
        $numSymbol = strlen($symbols);
        $string = '';
        for ($i = 0; $i < $leng; $i++) {
            $string .= substr($symbols, rand(1, $numSymbol) - 1, 1);
        }
        $string=$what.$string;
        return $string;
    }


}