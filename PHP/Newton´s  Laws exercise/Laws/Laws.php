<?php

abstract class Laws{
        private int $object;
        
        

    public function __construct(int $object ){

        $this->object=$object;
        

    }
    public function getObject(): int {
        return $this->object;
        
    }

    abstract public function getExplain(): string;

}
