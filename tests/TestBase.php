<?php
/**
 * Carbon Extension: Fiscal Year (FY)
 * @license GPLv2
 * @author Justin Rovang <generate@itnobody.com>
 */

require __DIR__.'/../vendor/autoload.php';

use CarbonExt\FiscalYear\Calculator;

class TestBase extends PHPUnit_Framework_TestCase {
    /**
     * @var Calculator
     */
    protected $fresh;

    protected function setUp() {
        date_default_timezone_set('America/Chicago');
        $this->fresh = new Calculator(7, 1);
    }
}