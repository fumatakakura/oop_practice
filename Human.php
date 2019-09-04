<?php


class Human
{   
    public $name;
    public $sex;
    public $age;
    public $money;
    public $job;

    //コンストラクタ

    public function __construct($name,$sex, $age, $money, $job)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
        $this->money = $money;
        $this->job = $job;
    }

    public function cry()
    {
        echo 'お金欲しいいいいいいいい';
        echo '<br>';
    }
   
    public function buy()
    {
        $this->noMoney();
    }

    private function noMoney()
    {
        echo 'お金を持っていません';
        echo '<br>';
    }
}