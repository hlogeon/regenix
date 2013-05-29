<?php
namespace tests;

use regenix\Regenix;
use regenix\Application;
use regenix\lang\ClassLoader;
use regenix\lang\ClassScanner;

class ClassloaderTest extends RegenixTest {

    const type = __CLASS__;

    public function project(){
        $this->assertRequire(ClassScanner::find('\\Bootstrap'));
        $this->assertRequire(ClassScanner::find('Bootstrap'));
        $this->assertRequire(ClassScanner::find('controllers\\Application'));
        $this->assertNotRequire(ClassScanner::find('controllers\\Application.php'));
    }
}