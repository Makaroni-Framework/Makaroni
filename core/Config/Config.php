<?php
namespace Makaroni\Framework\Config;


class Config {

    public function get(string|int $key): mixed
    {
        $keys = explode('.', $key);

        $value = require "../../main/config/config.php";

        foreach ($keys as $key) {
            if (!array_key_exists($key, $value)) {
                throw new \Exception("The {$key} Key not defined!");
            }

            $value = $value[$key];
        }
        return $value;
    }

}