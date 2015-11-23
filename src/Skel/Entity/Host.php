<?php

namespace Skel\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Host")
 */
class Host
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @var integer
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @var string
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=15)
     * @var string
     */
    private $ip_adress;

    /**
     * @ORM\Column(type="integer")
     * @var integer
     */
    private $api_port;

    public function __construct()
    {
        
    }

    /**
     * Get the value of Id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param integer id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Ip Adress
     *
     * @return string
     */
    public function getIpAdress()
    {
        return $this->ip_adress;
    }

    /**
     * Set the value of Ip Adress
     *
     * @param string ip_adress
     *
     * @return self
     */
    public function setIpAdress($ip_adress)
    {
        $this->ip_adress = $ip_adress;

        return $this;
    }

    /**
     * Get the value of Api Port
     *
     * @return integer
     */
    public function getApiPort()
    {
        return $this->api_port;
    }

    /**
     * Set the value of Api Port
     *
     * @param integer api_port
     *
     * @return self
     */
    public function setApiPort($api_port)
    {
        $this->api_port = $api_port;

        return $this;
    }

}
