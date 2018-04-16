<?php
//TODO

namespace Model\Entity;

class Object extends AbstractEntity
{

	private $id;
	private $type;
	private $x;
	private $y;
	private $width;
	private $height;
	private $userData;
	private $cssClass;
	private $bgColor;
	private $color;
	private $stroke;
	private $alpha;
	private $radius;
	private $name;

	private $ports;
	private $dasharray;
	private $angle;
	private $gap;

	private $validationErrors = [];

	public function isValid()
	{
		$isValid = true;

		if (empty($this->name)){
			$isValid = false;
			$this->validationErrors[] = "Veuillez renseigner un titre !";
		}
		if (strlen($this->name) > 255){
			$isValid = false;
			$this->validationErrors[] = "Votre titre est trop long !";
		}

		return $isValid;
	}

	//getter for error validation
	public function getValidationErrors()
	{
		return $this->validationErrors;
	}


	public function __construct()
	{
		
	}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param mixed $userData
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
    }

    /**
     * @return mixed
     */
    public function getCssClass()
    {
        return $this->cssClass;
    }

    /**
     * @param mixed $cssClass
     */
    public function setCssClass($cssClass)
    {
        $this->cssClass = $cssClass;
    }

    /**
     * @return mixed
     */
    public function getBgColor()
    {
        return $this->bgColor;
    }

    /**
     * @param mixed $bgColor
     */
    public function setBgColor($bgColor)
    {
        $this->bgColor = $bgColor;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getStroke()
    {
        return $this->stroke;
    }

    /**
     * @param mixed $stroke
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;
    }

    /**
     * @return mixed
     */
    public function getAlpha()
    {
        return $this->alpha;
    }

    /**
     * @param mixed $alpha
     */
    public function setAlpha($alpha)
    {
        $this->alpha = $alpha;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * @param mixed $ports
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;
    }

    /**
     * @return mixed
     */
    public function getDasharray()
    {
        return $this->dasharray;
    }

    /**
     * @param mixed $dasharray
     */
    public function setDasharray($dasharray)
    {
        $this->dasharray = $dasharray;
    }

    /**
     * @return mixed
     */
    public function getAngle()
    {
        return $this->angle;
    }

    /**
     * @param mixed $angle
     */
    public function setAngle($angle)
    {
        $this->angle = $angle;
    }

    /**
     * @return mixed
     */
    public function getGap()
    {
        return $this->gap;
    }

    /**
     * @param mixed $gap
     */
    public function setGap($gap)
    {
        $this->gap = $gap;
    }

    /**
     * use to make json file
     * @return array
     */
    public function toArray()
    {
        $array = [];
        foreach ($this as $attr => $value) {
            if (in_array($attr, ['validationErrors'])) {
                continue;
            }
            if ($attr == 'entities') {
                $newValue = [];
                foreach ($value as $task) {
                    $newValue[] = $task->toArray();
                }
                $value = $newValue;
            }
            $array[$attr] = $value;
        }
        return $array;
    }
}