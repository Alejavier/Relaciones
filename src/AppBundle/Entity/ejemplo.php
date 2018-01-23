<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ejemplo
 *
 * @ORM\Table(name="ejemplo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ejemploRepository")
 */
class ejemplo
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
     * @var string
     *
     * @ORM\Column(name="nose", type="string", length=100)
     */
    private $nose;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nose
     *
     * @param string $nose
     *
     * @return ejemplo
     */
    public function setNose($nose)
    {
        $this->nose = $nose;

        return $this;
    }

    /**
     * Get nose
     *
     * @return string
     */
    public function getNose()
    {
        return $this->nose;
    }
}

