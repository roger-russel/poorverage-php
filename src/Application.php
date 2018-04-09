<?php

namespace Poorverage;

use Exception;

Class Application {

  protected $commands = [];
  protected $flag_register = [];

  public function __construct() {

  }

  public function run($argv){

    $args = new Command\Args($argv);

    print_r($argv);


  }

}
