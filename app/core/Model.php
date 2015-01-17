<?php

interface Model {
    abstract function sql2db();
    abstract function getFromDb($id);
}
