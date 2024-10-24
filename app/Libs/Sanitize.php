<?php

namespace App\Libs;

class Sanitize
{
    /**
     * @param array $data
     * @param array $list
     * @return array
     */
    public static function search(array $data, array $list = []): array
    {
        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $list[$key] = htmlspecialchars(trim(str_ireplace(static::sqlDefinitions(), '', $value)));
            }
            if(is_array($value)){
                $list[$key] = static::search($value);
            }
        }

        return $list;
    }

    /**
     * @return string[]
     */
    private static function sqlDefinitions(): array
    {
        return [
            "SELECT",
            "'",
            ';',
            "SELECT * FROM",
            "*",
            "FROM",
            "WHERE",
            "INSERT",
            "UPDATE",
            "DELETE",
            "JOIN",
            "INNER JOIN",
            "LEFT JOIN",
            "RIGHT JOIN",
            "FULL JOIN",
            "GROUP BY",
            "ORDER BY",
            "HAVING",
            "DISTINCT",
            "LIKE",
            "BETWEEN",
            "NULL",
            "NOT NULL",
            "IS NULL",
            "UNION",
            "INTERSECT",
            "EXCEPT",
            "LIMIT",
            "OFFSET",
            "CREATE TABLE",
            "ALTER TABLE",
            "DROP TABLE",
            "DROP",
            "DROP ALL",
            "DROP ALL TABLE",
            "DROP ALL TABLES",
            "INDEX",
            "PRIMARY KEY",
            "FOREIGN KEY",
            "CHECK",
            "DEFAULT",
            "VIEW",
            "TRIGGER",
            "STORED PROCEDURE",
            "TRANSACTION",
            "COMMIT",
            "ROLLBACK",
            "SAVEPOINT",
            "GRANT",
            "REVOKE",
            "USE",
            "SHOW",
            "DESCRIBE",
        ];
    }
}
