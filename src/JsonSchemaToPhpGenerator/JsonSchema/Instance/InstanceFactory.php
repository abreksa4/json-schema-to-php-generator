<?php

namespace mpmontanez\JsonSchemaToPhpGenerator\JsonSchema\Instance;

use mpmontanez\JsonSchemaToPhpGenerator\Exceptions\UnknownJsonSchemaTypeException;

class InstanceFactory {

    public static function buildInstance($key, $value = null)
    {
        if ($key == 'number' || $key == 'integer') {
            return new JNumber($value);
        }
        elseif ($key == 'object') {
            return new JObject($value);
        }
        elseif ($key == 'string') {
            return new JsonString($value);
        } elseif ($key == 'boolean' || $key == 'bool') {
            return new JBoolean($value);
        }
        else if ($key == 'null') {
            return new JNull();
        }

        throw new UnknownJsonSchemaTypeException('Unknown JSON schema type: ' . $key);
    }

}