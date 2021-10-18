<?php
/*
 * Databases
 * Mysql (connect, select, where, runQuery)
 * Oracle (connect, select, where, runQuery)
 * Postgres (connect, select, where, runQuery)
 * Mongodb (connect, select, where, runQuery)
 *
 * dynmodb
 * cassendra db
 *
 */

interface DatabaseInterface
{
    public function connect($host, $username, $password): string;
    public function select($table, array $columns): array;
    public function where(array $columns, string $value, $operator = '='): array;
    public function runQuery($query);
}

//can't create object from abstract class
abstract class Database
{
    abstract public function connect($host, $username, $password): string;
    abstract public function select($table, array $columns): array;
    abstract public function where(array $columns, string $value, $operator = '='): array;
    abstract public function runQuery($query);

    public function excute()
    {
        echo 'ex function';
    }
}

trait DatabaseTrait
{
    public function printTable()
    {
        echo 'table';
    }
}

class Mysql implements DatabaseInterface
{
    use DatabaseTrait;

    public function connect($host, $username, $password): string
    {
        return 'mysql connection \n';
    }

    public function select($table, array $columns): array
    {
        // TODO: Implement select() method.
    }

    public function where(array $columns, string $value, $operator = '='): array
    {
        // TODO: Implement where() method.
    }

    public function runQuery($query)
    {
        echo 'mysql run query \n';
    }
}

class Oracle implements DatabaseInterface
{
    public function connect($host, $username, $password): string
    {
        return 'oracle connection \n';
    }

    public function select($table, array $columns): array
    {
        // TODO: Implement select() method.
    }

    public function where(array $columns, string $value, $operator = '='): array
    {
        // TODO: Implement where() method.
    }

    public function runQuery($query)
    {
        // TODO: Implement runQuery() method.
    }
}

class Postgres extends Mysql
{
    public function connect($host, $username, $password): string
    {
        return 'postgres connection \n';
        //return parent::connect($host, $username, $password); // TODO: Change the autogenerated stub
    }

    public function runQuery($query)
    {
        echo 'postgres run query';// TODO: Change the autogenerated stub
    }
}

//client
class Configuration
{
    public function setDataBaseObject(DatabaseInterface $databaseInterface)
    {
        echo $databaseInterface->connect('127.0.0.1', 'root', 'root');

        echo $databaseInterface->runQuery('data base');
    }
}

//
$object = new Configuration();
echo $object->setDataBaseObject(new Postgres());
