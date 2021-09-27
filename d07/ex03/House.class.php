<?PHP

abstract class House
{
	abstract function getHouseName();
	abstract function getHouseMotto();
	abstract function getHouseSeat();

	public function introduce()
	{
		$ret = sprintf("House %s of %s : \"%s\"\n",
		$this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto());
		print($ret);
	}
}

?>