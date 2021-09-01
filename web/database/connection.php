<?php
function connect()
{
    try {
        $path =  __DIR__ . '/data.db';

        $db = new \PDO('sqlite:' . $path, '', '', array(
            \PDO::ATTR_EMULATE_PREPARES => false,
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ
        ));


        return $db;
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
}
