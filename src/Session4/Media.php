<?php
//checking if an object is an instance of a specific class
interface IMedia
{
    public function add(string $item);
}

class DVD implements IMedia
{
    public function add(string $item)
    {
        echo "DVD class adding item \n";
    }

    public function version()
    {
        echo "DVD version function \n";
    }
}

class Radio implements IMedia
{
    public function add(string $item)
    {
        echo "Radio class adding item \n";
    }

    public function model()
    {
        echo "Radio model function \n";
    }
}

class Client
{
    public function setMedia(IMedia $media)
    {
        $media->add('new item');

        if ($media instanceof DVD) {
            $media->version();
        }

        if ($media instanceof Radio) {
            $media->model();
        }
    }
}

$clientObj = new Client();
$clientObj->setMedia(new Radio());