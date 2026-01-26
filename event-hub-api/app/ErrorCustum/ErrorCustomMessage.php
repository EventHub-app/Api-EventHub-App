<?php

namespace App\ErrorCustum;

use Error;
use Exception;

class  ErrorCustomMessage extends Exception{

  public function __construct (string $message, int $code){
     parent::__construct($message, $code);
  }
     
}
