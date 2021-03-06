<?php

namespace Yepsua\LOVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LOV
 *
 * @ORM\Table(name="list_of_value")
 * @ORM\Entity(repositoryClass="Yepsua\LOVBundle\Entity\Repository\LOVRepository")
 */
class LOV
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Yepsua\LOVBundle\Entity\LOVGroup")
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=64)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;
    
    /**
     * @var order_by
     * @ORM\Column(name="order_by", type="integer", options={"default" = 0})
     */
    private $order_by;

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
     * Set value
     *
     * @param string $value
     * @return LOV
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return LOV
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Get The Description
     *
     * @return string 
     */
    public function __toString()
    {
        return $this->getDescription();
    }

    /**
     * Set order_by
     *
     * @param integer $orderBy
     * @return LOV
     */
    public function setOrderBy($orderBy)
    {
        $this->order_by = $orderBy;
    
        return $this;
    }

    /**
     * Get order_by
     *
     * @return integer 
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Set group
     *
     * @param \Yepsua\LOVBundle\Entity\LOVGroup $group
     * @return LOV
     */
    public function setGroup(\Yepsua\LOVBundle\Entity\LOVGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \Yepsua\LOVBundle\Entity\LOVGroup 
     */
    public function getGroup()
    {
        return $this->group;
    }
}
