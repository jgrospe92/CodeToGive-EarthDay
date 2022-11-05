<?php
    namespace app\core;
//    this class is used for validating input data before sending to the database

    abstract class Validator {
        abstract public function isValidData($data);
    }