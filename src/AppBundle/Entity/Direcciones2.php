<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Direcciones2
 *
 * @ORM\Table(name="direcciones2")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Direcciones2Repository")
 */
class Direcciones2
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
     * @ORM\Column(name="Ciudad", type="string", length=100)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="Delegacion", type="string", length=100)
     */
    private $delegacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Calle", type="string", length=100)
     */
    private $calle;

    /**
     * @var int
     *
     * @ORM\Column(name="Numero", type="integer")
     */
    private $numero;

    // ...

    /**
     * @ORM\OneToMany(targetEntity="Usuarios2", mappedBy="Direcciones2")
     */
    private $usuarios2;

    public function __construct()
    {
        $this->usuarios2 = new ArrayCollection();
    }


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
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Direcciones2
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return Direcciones2
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return Direcciones2
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Direcciones2
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set usuarios
     *
     * @param string $usuarios
     *
     * @return Direcciones2
     */

    public function setUsuarios2($usuarios)
    {
        $this->usuarios2 = $usuarios2;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return string
     */
    public function getUsuarios2()
    {
        return $this->usuarios2;
    }
    public function __toString()
    {
      return $this ->delegacion;
    }

}
