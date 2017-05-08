<?php

use PHPUnit\Framework\TestCase;

class build_tests extends TestCase
{
    public function testForEnv()
    {
        require_once("test_config.php");
        $this->assertEquals(isset($_ENV['API_BASE_URL']), true);
        $this->assertEquals(isset($_ENV['DRINK_SERVER_URL']), true);
        $this->assertEquals(isset($_ENV['LOCAL_DRINK_SERVER_URL']), true);
        $this->assertEquals(isset($_ENV['RATE_LIMIT_DROPS_DROP']), true);
        $this->assertEquals(isset($_ENV['DEBUG']), true);
        $this->assertEquals(isset($_ENV['DEBUG_USER_UID']), true);
        $this->assertEquals(isset($_ENV['DEBUG_USER_CN']), true);
        $this->assertEquals(isset($_ENV['USE_LOCAL_DRINK_SERVER']), true);
    }
}

?>