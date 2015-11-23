<?php

namespace Skel\Entity;

use Doctrine\ORM\Mappint as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="container")
 */
class Container
{
    protected $id;

    /**
     * @ORM/Column(type="datetime")
     * @var datetime
     */
    protected $created;

    /**
     * @ORM/Column(type="datetime")
     * @var datetime
     */
    protected $updated;

    /**
     * @ORM/Column(type="string")
     * @var string
     */
    private $docker_id;

    /**
     * @ORM/Column(type="integer")
     * @var integer
     */
    private $integra_user;

    /**
     * @ORM/Column(type="string")
     * @var string
     */
    private $ip_adress;

    /**
     * @ORM/Column(type="string")
     * @var stringW
     */
    private $builder_version;

    public function __construct()
    {
        $this->setCreated(date('Y-m-d H:i:s'));
    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Created
     *
     * @return datetime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of Created
     *
     * @param datetime created
     *
     * @return self
     */
    public function setCreated(datetime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of Updated
     *
     * @return datetime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the value of Updated
     *
     * @param datetime updated
     *
     * @return self
     */
    public function setUpdated(datetime $updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get the value of Docker Id
     *
     * @return string
     */
    public function getDockerId()
    {
        return $this->docker_id;
    }

    /**
     * Set the value of Docker Id
     *
     * @param string docker_id
     *
     * @return self
     */
    public function setDockerId($docker_id)
    {
        $this->docker_id = $docker_id;

        return $this;
    }

    /**
     * Get the value of Integra User
     *
     * @return integer
     */
    public function getIntegraUser()
    {
        return $this->integra_user;
    }

    /**
     * Set the value of Integra User
     *
     * @param integer integra_user
     *
     * @return self
     */
    public function setIntegraUser($integra_user)
    {
        $this->integra_user = $integra_user;

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
     * Get the value of Builder Version
     *
     * @return string
     */
    public function getBuilderVersion()
    {
        return $this->builder_version;
    }

    /**
     * Set the value of Builder Version
     *
     * @param string builder_version
     *
     * @return self
     */
    public function setBuilderVersion($builder_version)
    {
        $this->builder_version = $builder_version;

        return $this;
    }

}
