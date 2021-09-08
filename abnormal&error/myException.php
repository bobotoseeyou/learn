<?php


class myException extends Exception
{
    public function errorzyfMessage()
         {
             return 'Error line ' . $this->getLine().' in ' . $this->getFile()
                 .': <b>' . $this->getMessage() . '</b> Must in (0 - 60)';
         }

}

     $age = 102;
     try {
       $age = intval($age);
         if($age > 60) {
            throw new myException($age);
         }

     } catch (myException $e) {
      echo $e->errorzyfMessage();
     }