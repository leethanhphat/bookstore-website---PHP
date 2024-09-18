<?php
use PHPUnit\Framework\TestCase;

require_once 'models/User.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new User(1, 'testuser', 'testpass', 'test@example.com', 1);
    }

    public function testGetUserID()
    {
        $this->assertEquals(1, $this->user->getUserID());
    }

    public function testSetUserID()
    {
        $this->user->setUserID(2);
        $this->assertEquals(2, $this->user->getUserID());
    }

    public function testGetUsername()
    {
        $this->assertEquals('testuser', $this->user->getUsername());
    }

    public function testSetUsername()
    {
        $this->user->setUsername('newuser');
        $this->assertEquals('newuser', $this->user->getUsername());
    }

    public function testGetPassword()
    {
        $this->assertEquals('testpass', $this->user->getPassword());
    }

    public function testSetPassword()
    {
        $this->user->setPassword('newpass');
        $this->assertEquals('newpass', $this->user->getPassword());
    }

    public function testGetEmail()
    {
        $this->assertEquals('test@example.com', $this->user->getEmail());
    }

    public function testSetEmail()
    {
        $this->user->setEmail('new@example.com');
        $this->assertEquals('new@example.com', $this->user->getEmail());
    }

    public function testIsAdmin()
    {
        // $this->assertTrue(condition: $this->user->isAdmin());
        // Kiểm tra khi người dùng là admin
        $this->user->setIsAdmin(1);
        $this->assertTrue($this->user->isAdmin());

        // Kiểm tra khi người dùng không phải là admin
        $this->user->setIsAdmin(0);
        $this->assertFalse($this->user->isAdmin());
    }

    public function testSetIsAdmin()
    {
        // $this->user->setIsAdmin(0);
        // $this->assertFalse($this->user->isAdmin());

         // Thiết lập người dùng là admin và kiểm tra
        $this->user->setIsAdmin(1);
        $this->assertTrue($this->user->isAdmin());

        // Thiết lập người dùng không phải là admin và kiểm tra
        $this->user->setIsAdmin(0);
        $this->assertFalse($this->user->isAdmin());
    }
}
