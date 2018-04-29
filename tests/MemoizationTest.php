<?php

require_once("src/Memoization.php");

class MemoizationTest extends PHPUnit_Framework_TestCase {


    public function testMemoize() {

        //    $this->assertTrue(false, "true didn't end up being false!" );
        $sleepz = \kdaviesnz\memoization\Memoization::memoize(function($time){
            sleep( $time );
            return true;
        });

        $firstTestStart = \microtime(true);
        $sleepz(1);
        $firstTestEnd = \microtime(true);

        $secondTestStart = \microtime(true);
        $sleepz(1);
        $secondTestEnd = \microtime(true);

        $firstTestTime = $firstTestEnd - $firstTestStart;
        $secondTestTime = $secondTestEnd - $secondTestStart;

        echo "First test took $firstTestTime ms\n";
        echo "Second test took $secondTestTime ms\n";
    }

}
