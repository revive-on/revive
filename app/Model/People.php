<?php
/**
 * Created by PhpStorm.
 * User: Velmont
 * Date: 2018-01-02
 * Time: 오후 7:47
 */

namespace App\Model;


// 자고로 사람이도다.
class People
{
    private $weapon;
    private $hp;
    private $stamina;
    private $name;

    public function __construct($name)
    {
        $this->name = name;
    }

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function getDamage($damage)
    {
        $this->hp -= $damage;
    }

    public function useStamina($stamina)
    {
        $this->stamina -= $stamina;
    }
}