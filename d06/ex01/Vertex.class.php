<?PHP

require_once '../ex00/Color.class.php';

class Vertex
{
	static $verbose = FALSE;
	private $_x = 0.00;
	private $_y = 0.00;
	private $_z = 0.00;
	private $_w = 1.00;
	private $_color;

	function __construct(array $kwargs)
	{
		if (isset($kwargs['x']) && isset($kwargs['y']) && isset($kwargs['z']))
		{
			$this->_x = intval($kwargs['x']);
			$this->_y = intval($kwargs['y']);
			$this->_z = intval($kwargs['z']);
		}
		if (isset($kwargs['w']))
			$this->_w = intval($kwargs['w']);
		if (isset($kwargs['color']))
		{
			$this->_color = $kwargs['color'];
		}
		if (!isset($kwargs['color']))
			$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
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
		if ($str = file_get_contents("Vertex.doc.txt"))
			echo($str . "\n");
		else
			echo("File does not exist\n");
	}
	public function __toString()
	{
		if (self::$verbose)
		{
			$ret = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d )",
			$this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
			return ($ret);
		}
		else
		{
			$ret = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
			$this->_x, $this->_y, $this->_z, $this->_w);
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
		if ($name == '_Color')
		{
			return ($this->getColor());
		}
	}
	public function __set($name, $value)
	{
		if ($name == '_x')
		{
			$this->setX($value);
		}
		if ($name == '_y')
		{
			$this->setY($value);
		}
		if ($name == '_z')
		{
			$this->setZ($value);
		}
		if ($name == '_w')
		{
			$this->setW($value);
		}
		if ($name == '_color')
		{
			$this->setColor($value);
		}
	}
	public function setX($_x)
	{
		$this->_x = $kwargs('x');
	}
	public function setY($_y)
	{
		$this->_y = $kwargs('y');
	}
	public function setZ($_z)
	{
		$this->_z = $kwargs('z');
	}
	public function setW($_w)
	{
		$this->_w = $kwargs('w');
	}
	public function setColor($_color)
	{
		$this->_color = $kwargs('color');
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
	public function getColor()
	{
		return ($this->_color);
	}
}

?>