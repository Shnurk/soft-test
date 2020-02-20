<?php
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * unit: Viktor
 * Date: 01.05.2019
 * Time: 16:31
 */


class UnitTest extends TestCase
{

    private $unit;

    protected function setUp() : void
    {
        $this->unit = new \App\Models\unit();
    }

    protected function tearDown(): void
    {

    }

    /**
     * @dataProvider dataProvider
     */

    public function testGenerate_type($what, $leng)
    {
        $String="";
        $String=$this->unit->generate($what,$leng);
        $this->assertIsString($String);
        return $String;
    }
    /**
     * @dataProvider dataProvider
     * @depends testGenerate_type
     */
    public function testGenerate_leng($what, $leng)
    {
        $this->assertEquals(strlen($what)+$leng,strlen($this->unit->generate($what,$leng)));
    }
    /**
     * @dataProvider dataProvider
     * @depends testGenerate_type
     */
    public function testGenerate_contain_one($what, $leng)
    {
        $this->assertStringContainsString($what, $this->unit->generate($what,$leng));
    }
    /**
     * @dataProvider dataProvider
     * @depends testGenerate_type
     */
    public function testGenerate_contain_two($what, $leng)
    {
        $i=0;
        $String=$this->unit->generate($what,$leng);
        if($leng==0)
        {
            $this->assertEquals(1,1);
        }
        else {
            for ($i = strlen($what); $i < strlen($String) - 1; $i++) {

                $this->assertEquals(1, $String{$i} == 'a' || 'b' || 'd' || 'e' || 'f' || 'h' || 'i' || 'k' || 'n' || 'r' || 's' || 't' || 'y'
                    || 'z' || '0' ||'1'|| '2' || '3' || '4' || '5' || '6' || '7' || '8' || '9');
            }
        }
    }

    public function dataProvider() {
        return [
            'empty_zero' => ["", 0],
            'empty_number' =>["", 5],
            'notemty_zero' =>["asd", 0],
            'bigstring_bigleng' =>["asdf4534jhljkkjbjJKBJJKBJBUGnsdfkhekf;hjhjhhjkhsdfjjkJLJHJhdkjwhef", 9999],
            'bigstring_normalleng' =>["ajgkjfg;sdfo9ujKJUPHphn;fn*H;hh89HYFTYf6tsygfdleg7fgubJUBGYbfsbfoslkfjbisuvbsjkbvksbjsdf", 12],
            'normalstring_biglleng' =>["afdgdfg", 859683],
            'one' =>["u", 15],
            'two' =>["pr", 23],
            'three' =>["adm", 7],
        ];
    }
}