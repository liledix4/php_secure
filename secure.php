<?php
final class secure
{
    final public static function sanitize(string $raw): string
    {
        return addslashes($raw);
    }

    // Use with "database::mysqlObject" property from "php_database" module.
    final public static function sanitizeSQL($mysql, string $raw): string
    {
        return mysqli_real_escape_string($mysql, $raw);
    }
}