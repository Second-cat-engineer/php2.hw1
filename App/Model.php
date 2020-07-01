<?php

namespace App;

use App\Db;

abstract class Model
{
    protected const TABLE = '';

    public int $id;

    public static function findAll(): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $param[':id'] = $id;
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $res = $db->query($sql, static::class, $param);
        if (empty($res)) {
            return false;
        }
        return $res[0];
    }

    public static function findLastCount($count)
    {
        if (is_numeric($count)) {
            $db = new Db();
            $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $count;
            return $db->query($sql, static::class);
        }
        return false;
    }
}