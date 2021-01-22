<?php

namespace Helper {

    class InputHelper
    {

        static function input(string $info): string
        {
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);
        }

    }

}
