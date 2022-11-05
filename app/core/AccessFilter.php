<?php
    namespace app\core;
//this is for restricting access to certain functions depending on certain conditions
    abstract class AccessFilter {
        abstract public function execute();
    }