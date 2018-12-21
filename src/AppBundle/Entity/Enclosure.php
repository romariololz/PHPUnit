<?php
/**
 * Created by PhpStorm.
 * User: romariololz
 * Date: 21/12/18
 * Time: 21:09
 */

namespace AppBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="enclosure")
 */
class Enclosure
{
    /**
     * @var Collection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Dinosaur", mappedBy="enclosure", cascade={"persist"})
     */
    private $dinosaurs;

    public function __construct()
    {
        $this->dinosaurs = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getDinosaurs(): Collection
    {
        return $this->dinosaurs;
    }

    /**
     * @param mixed $dinosaurs
     */
    public function setDinosaurs($dinosaurs)
    {
        $this->dinosaurs = $dinosaurs;
    }

    public function addDinosaur(Dinosaur $dinosaur)
    {
        $this->dinosaurs[] = $dinosaur;
    }
}