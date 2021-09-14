<?php
class Cars
{
	public $EngineNO;
	public $Model;
	public $Owner;
	function __construct($EngineNO, $Model, $Owner) {
    $this->EngineNO= $EngineNO;
    $this->Model=$Model;
    $this->Owner=$Owner;
  }
	function ShowInfo()
	{
		echo "Engine No : $this->EngineNO";
		echo "<br>";
		echo "Model : $this->Model";
		echo "<br>";
		echo "Owner name: $this->Owner";
		echo "<br>";
	}
}
$car1=new Cars("1231","A1","Sadik");
$car1->ShowInfo();

$car2=new Cars("3214","A2","Rohim");
$car2->ShowInfo();

?>