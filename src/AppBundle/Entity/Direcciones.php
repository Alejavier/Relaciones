<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Direcciones
 *
 * @ORM\Table(name="direcciones")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DireccionesRepository")
 */
class Direcciones
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
         * @ORM\Column(name="name", type="string", length=255)
         */
        private $name;

            /**
             * @var string
             *
             * @ORM\Column(name="nombre", type="string", length=255)
             */
            private $nombre;


    // ...

    /**
     * @ORM\OneToMany(targetEntity="Usuarios", mappedBy="Direcciones")
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Direcciones
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


        /**
         * Set usuarios
         *
         * @param string $usuarios
         *
         * @return Direcciones
         */
        public function setUsuarios($usuarios)
        {
            $this->usuarios = $usuarios;

            return $this;
        }

        /**
         * Get usuarios
         *
         * @return string
         */
        public function getUsuarios()
        {
            return $this->usuarios;
        }
        public function __toString()
        {
          return $this ->name;
        }
}
