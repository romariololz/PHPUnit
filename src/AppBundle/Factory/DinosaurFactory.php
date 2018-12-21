<?php
/**
 * Created by PhpStorm.
 * User: romariololz
 * Date: 21/12/18
 * Time: 18:37
 */

namespace AppBundle\Factory;


use AppBundle\Entity\Dinosaur;

class DinosaurFactory
{
    public function growVelociraptor(int $length): Dinosaur
    {
        return $this->createDinosaur('Velociraptor', true, 5);
    }

    private function createDinosaur(string $genus, bool $isCarnivorous, int $length): Dinosaur
    {
        $dinosaur = new Dinosaur($genus, $isCarnivorous);

        $dinosaur->setLength($length);

        return $dinosaur;
    }

    public function growFromSpecification(string $specification): Dinosaur
    {

    }
}