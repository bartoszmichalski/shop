<?php

include_once __DIR__ .'/../src/User.php';

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testIsInstanceOfUser() 
    {
        $newUser = new User();
        $this->assertInstanceOf(User::class, $newUser);
          }
    public function testUserChangedName() 
    {
        $newUser = new User();
        $newUser->setName('nowy');
        $this->assertEquals('nowy', $newUser->getName());
    }
    public function testUserChangedEmail() 
    {
        $newUser = new User();
        $newUser->setEmail('nowy@nowy.pl');
        $this->assertEquals('nowy@nowy.pl', $newUser->getEmail());
    }
    public function testUserChangedSurname() 
    {
        $newUser = new User();
        $newUser->setSurname('Kowalski');
        $this->assertEquals('Kowalski', $newUser->getSurname());
    }
    public function testIfUserCanHaveEmptyName()
    {
        $newUser = new User();
        $newUser->setName('');
        $this->assertEquals(NULL, $newUser->getName());
    }
}
