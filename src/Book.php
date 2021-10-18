<?php

interface FileFormatterInterface
{
    public function print(): string;
}

trait FileTrait
{
    private string $name;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class Book implements FileFormatterInterface
{
    use FileTrait;

    public function print(): string
    {
        //code for print
        return strtoupper($this->name);
    }
}

class TextDocument implements FileFormatterInterface
{
    use FileTrait;

    public function print(): string
    {
        //code for print
        return ucfirst($this->name);
    }
}

class PDFDocument implements FileFormatterInterface
{
    use FileTrait;

    public function print(): string
    {
        //code for print
        return ucfirst($this->name);
    }
}

//force multiple classes use the same method name

$bookObj = new PDFDocument();
$bookObj->setName('oop PHP');
var_dump($bookObj->print());

//$textObj = new TextDocument();
//$textObj->setName('excel file');
//var_dump($textObj->print2());