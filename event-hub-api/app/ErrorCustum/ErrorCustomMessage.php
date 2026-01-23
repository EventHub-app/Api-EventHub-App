<?php

namespace App\ErrorCustum;

use Error;

class  ErrorCustomMessage extends Error{

  public function __construct ($message, $code){
     parent::__construct($message, $code);
  }
     
}
