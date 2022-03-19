<?php
class Team{
    protected $name;
    protected $teammates=[];
    function __construct($name){
        $this->name=$name;

    }
    static function create($name){
        return new static ($name);
    }
    function getTeamName(){
        return $this->name;
    }
    function addTeammate($tmname){
        $this->teammates[]=$tmname;
    }
    function getTeammate(){
        return $this->teammates;
    }
}
// $Team1=new Team("Man U");
$Team1=Team::create("Man U");
echo $Team1->getTeamName();
$Team1->addTeammate("Mg Mg");
$Team1->addTeammate("Kyae Kyaw");

print_r($Team1->getTeammate()[1]);
$Team2=Team::create("Chesea");
echo $Team2->getTeamName();
$Team2->addTeammate("MYO MYO");
print_r($Team2->getTeammate());

?>