<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios2
 *
 * @ORM\Table(name="usuarios2")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Usuarios2Repository")
 */
class Usuarios2
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
     * @ORM\Column(name="Nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="Edad", type="integer")
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoPaterno", type="string", length=100)
     */
    private $apellidoPaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="ApellidoMaterno", type="string", length=100)
     */
    private $apellidoMaterno;

    /**
         *@var string
         * @ORM\ManyToOne(targetEntity="Direcciones2", inversedBy="Usuarios2")
         * @ORM\JoinColumn(name="Direcciones2_id", referencedColumnName="id")
         */
        private $direcciones;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuarios2
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Usuarios2
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set apellidoPaterno
     *
     * @param string $apellidoPaterno
     *
     * @return Usuarios2
     */
    public function setApellidoPaterno($apellidoPaterno)
    {
        $this->apellidoPaterno = $apellidoPaterno;

        return $this;
    }

    /**
     * Get apellidoPaterno
     *
     * @return string
     */
    public function getApellidoPaterno()
    {
        return $this->apellidoPaterno;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     *
     * @return Usuarios2
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;

        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set direcciones
     *
     * @param string $direcciones
     *
     * @return Usuarios
     */
    public function setDirecciones($direcciones)
    {
        $this->direcciones = $direcciones;

        return $this;
    }

    /**
     * Get direcciones
     *
     * @return string
     */
    public function getDirecciones()
    {
        return $this->direcciones;
    }
}
