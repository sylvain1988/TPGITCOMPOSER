<?php

class ValidatePassTest Extends PHPUnit_Framework_testCase {
    public function testValiLenght () {
        $valpass = new ValidatePassTest();
        $this->assertFalse($valpass->validLenght('1234'));
    }
}
?>
