<?php

interface Model {
    abstract function sqlAdd();
    abstract function sqlRm();
    abstract function sqlRead();
    abstract function sqlUpdate();       
}
