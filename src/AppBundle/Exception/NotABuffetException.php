<?php
/**
 * Created by PhpStorm.
 * User: romariololz
 * Date: 21/12/18
 * Time: 21:21
 */

namespace AppBundle\Exception;


class NotABuffetException extends \Exception
{
    protected $message = 'Please do not mix the carnivorous and non-carnivorous dinosaurs';
}