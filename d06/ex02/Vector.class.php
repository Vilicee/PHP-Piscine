<?PHP

require_once '../ex01/Vertex.class.php';

class Vector
{
	static $verbose = FALSE;
	private $_x;
	private $_y;
	private $_z;
	private $_w = 0;

	function __construct(array $kwargs)
	{		
		if (isset($kwargs['orig']))
		{
			$orig = new Vertex(array('x' => $kwargs['orig']->_x, 'y' => $kwargs['orig']->_y, 'z' => $kwargs['orig']->_z));
		}
		if (!isset($kwargs['orig']))
		{
			$orig = new Vertex(array('x' => 0.0, 'y' => 0.0, 'z' => 0.0, 'w' => 1.0));
		}
		if (isset($kwargs['dest']))
		{
			$this->_x = $kwargs['dest']->_x - $kwargs['orig']->_x;
			$this->_y = $kwargs['dest']->_y - $kwargs['orig']->_z;
			$this->_z = $kwargs['dest']->_z - $kwargs['orig']->_y;
		}
			if (self::$verbose)
			print($this . " constructed\n");
	}
	function __destruct()
	{

		if (self::$verbose)
			print($this . " destructed\n");
	}
	public static function doc()
	{
		if ($str = file_get_contents("Vector.doc.txt"))
			echo($str . "\n");
		else
			echo("File does not exist\n");
	}
	public function __toString()
	{
		if (self::$verbose)
		{
			$ret = sprintf("Vector( x:%.2f, y:%.2f, z:%.2f, w:%.2f )",
			$this->_x, $this->_y, $this->_z, $this->_w,);
			return ($ret);
		}
	}
	public function __get($name)
	{
		if ($name == '_x')
		{
			return ($this->getX());
		}
		if ($name == '_y')
		{
			return ($this->getY());
		}
		if ($name == '_z')
		{
			return ($this->getZ());
		}
		if ($name == '_w')
		{
			return ($this->getW());
		}
	}
	public function getX()
	{
		return ($this->_x);
	}
	public function getY()
	{
		return ($this->_y);
	}
	public function getZ()
	{
		return ($this->_z);
	}
	public function getW()
	{
		return ($this->_w);
	}
}

?>