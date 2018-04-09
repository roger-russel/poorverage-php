<?php

class ReadCommandsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {

      $argv = [
        './poorverage',
        '--output=./gh-pages/xxx',
        '--branch=gh-pages',
      ];

      require __ROOT__ . '/poorverage';

    }
}
