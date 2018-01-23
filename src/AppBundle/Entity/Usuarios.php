<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuariosRepository")
 */
class Usuarios
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
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="edad", type="integer")
     */
    private $edad;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=50)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="ocupacion", type="string", length=200)
     */
    private $ocupacion;

    /**
         *@var string
         * @ORM\ManyToOne(targetEntity="Direcciones", inversedBy="Usuarios")
         * @ORM\JoinColumn(name="Direcciones_id", referencedColumnName="id")
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
     * @return Usuarios
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
     * @return Usuarios
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
     * Set correo
     *
     * @param string $correo
     *
     * @return Usuarios
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     *
     * @return Usuarios
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
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
