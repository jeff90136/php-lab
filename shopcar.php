<?php

class cart{
    private $member;
    private $list;
    function __construct($member){
        $this->member=$member;
        $this->list=array();
    }
    function add($id,$number){
        if (array_key_exists($id,$this->list)){
            $this->list[$id]+=$number;
        }else{
            $this->list[$id]=$number;
        }
    }
    function edit($id,$number){
        if(isset($this->list[$id])){
            $this->list[$id]=$number;
        }
    }
    function clear($id){
        if(isset($this->list[$id])){
            unset($this->list[$id]);
        }
    }
    function getList(){
        return $this->list;
    }
    function getmember(){
        return $this->member;
    }

}

class member{
    private $id,$name,$level;
    function __construct($a,$b,$c){
        $this->id =$a;
        $this->name=$b;
        $this->level=$c;
    }
    function getName(){return $this->name;}
    function getLevel(){return $this->level;}
}

class test{
    var $test;
}