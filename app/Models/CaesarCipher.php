<?php

namespace App\Models;

class CaesarCipher
{
    public static function encrypt($text, $shift)
    {
        return self::process($text, $shift);
    }

    public static function decrypt($text, $shift)
    {
        return self::process($text, -$shift);
    }

    private static function process($text, $shift)
    {
        $result = '';
        $shift = $shift % 26;

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $ascii = ord($char);
                $base = ctype_upper($char) ? ord('A') : ord('a');

                $result .= chr((($ascii - $base + $shift + 26) % 26) + $base);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}
