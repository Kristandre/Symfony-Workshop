<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weather
 *
 * @ORM\Table(name="weather")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeatherRepository")
 */
class Weather
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="temperature", type="integer")
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="weatherType", type="string", length=255)
     */
    private $weatherType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="weatherType", type="string", length=255)
     */
    private $city;


    public function getTemperatureInCelsius(){
        return $this->temperature - 272.15;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set temperature
     *
     * @param integer $temperature
     * @return Weather
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return integer 
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set weatherType
     *
     * @param string $weatherType
     * @return Weather
     */
    public function setWeatherType($weatherType)
    {
        $this->weatherType = $weatherType;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Weather
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get weatherType
     *
     * @return string
     */
    public function getWeatherType()
    {
        return $this->weatherType;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Weather
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }
}
