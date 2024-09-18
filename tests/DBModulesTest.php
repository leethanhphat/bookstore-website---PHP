<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../modules/db_module.php';

class DBModulesTest extends TestCase
{
    private $link;

    protected function setUp(): void
    {
        taoKetNoi($this->link);
    }

    public function testTaoKetNoi()
    {
        $this->assertNotNull($this->link);
        $this->assertTrue(mysqli_ping($this->link));
    }

    public function testChayTruyVanTraVeDL()
    {
        $sql = "SELECT * FROM tbl_users WHERE 1=1"; // Truy vấn hợp lệ để kiểm tra
        $result = chayTruyVanTraVeDL($this->link, $sql);
        $this->assertInstanceOf(mysqli_result::class, $result);
    }

    protected function tearDown(): void
    {
        mysqli_close($this->link);
    }
}
