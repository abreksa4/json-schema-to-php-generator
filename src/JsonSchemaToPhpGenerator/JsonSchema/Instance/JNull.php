<?php

namespace mpmontanez\JsonSchemaToPhpGenerator\JsonSchema\Instance;

/**
 * Class Null
 * @package mpmontanez\JsonSchemaToPhpGenerator\JsonSchema\Instance
 *
 * A JSON "null" production
 */
class JNull extends Instance
{
    public function __construct()
    {
        $this->key = 'null';
        $this->phpDataType = '\stdClass';
        $this->value = null;
    }
}