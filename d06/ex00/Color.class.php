<?PHP

class Color 
{
	static $verbose = FALSE;
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public $rgb = 0;
	
	function __construct(array $kwargs) 
	{	
		if (isset($kwargs['rgb'])) 
		{
			$color = intval($kwargs['rgb']);
			$this->red = $color / 65536;
			$this->green = $color % 65536 / 256;
			$this->blue = $color % 65536 % 256;
		}
		else if (isset($kwargs['red']) && isset($kwargs['green']) && isset($kwargs['blue'])) 
		{
			$this->red = intval($kwargs['red']);
			$this->green = intval($kwargs['green']);
			$this->blue = intval($kwargs['blue']);
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
		if ($str = file_get_contents("Color.doc.txt"))
			echo($str . "\n");
		else
			echo("File does not exist\n");
	}
	public function __toString()
	{
		$ret = sprintf("Color( red: %3d, green: %3d, blue: %3d )",
						$this->red, $this->green, $this->blue);
		return ($ret);
	}
	public function add($color)
	{
		$new = new Color(array('red' => $this->red + $color->red, 'green' => $this->green + $color->green,'blue' => $this->blue + $color->blue));
		return ($new);
	}
	public function sub($color)
	{
		$new = new Color(array('red' => $this->red - $color->red, 'green' => $this->green - $color->green,'blue' => $this->blue - $color->blue));
		return ($new);
	}
	public function mult($int)
	{
		$new = new Color(array('red' => $this->red * $factor, 'green' => $this->green * $factor,'blue' => $this->blue * $factor));
		return ($new);
	}
}

?>