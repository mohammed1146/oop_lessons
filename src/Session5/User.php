<?php
//creating methods dynamically
class User
{
    static function find($args)
    {
        echo "select * from users where " . strtolower($args['field']) . "=" . $args['value'][0] . "\n";
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
    }

    static function __callStatic(string $name, array $arguments)
     {
         if (preg_match('/^findBy(.+)$/', $name, $matches)) {
            return static::find([
                'field' => $matches[1],
                'value' => $arguments
            ]);
        }
     }
}

//$user = new User();
//$user->findById($userId = 10);
//$user->findByEmail('mohammedjalala@gmail.com');


$user = User::findById(123);
$user2 = User::findByEmail('mohammed@gmail.com');
$user2 = User::findAddress('Gaza Palestine ....');
