<?php

namespace classes;

use interfaces\iFile;

class File implements iFile
{
    protected $filePath;
    protected $pathinfo = [];

    public function __construct($filePath)
    {
        $this->filePath = $filePath;

        $file = fopen($filePath, 'a');
        fclose($file);

        $this->pathinfo = pathinfo($this->filePath);
    }

    public function getPath()
    {
        // путь к файлу
        return $this->filePath;
    }

    public function getDir()
    {
        // папка файла
        return $this->pathinfo['dirname'];
    }

    public function getName()
    {
        // имя файла
        return $this->pathinfo['filename'];
    }

    public function getExt()
    {
        // расширение файла
        return $this->pathinfo['extension'];
    }

    public function getSize()
    {
        // размер файла
        return filesize($this->filePath);
    }

    public function getText()
    {
        // получает текст файла
        return file_get_contents($this->filePath);
    }

    public function setText($text)
    {
        // устанавливает текст файла
        file_put_contents($this->filePath, $text);
    }

    public function appendText($text)
    {
        // добавляет текст в конец файла
        file_put_contents($this->filePath, $text, FILE_APPEND | LOCK_EX);
    }

    public function copy($copyPath)
    {
        // копирует файл
        copy($this->filePath, $copyPath);
    }

    public function delete()
    {
        // удаляет файл
        unlink($this->filePath);
    }

    public function rename($newName)
    {
        // переименовывает файл
        rename($this->filePath, $this->getDir() . '/' . $newName . '.' . $this->getExt());
    }

    public function replace($newPath)
    {
        var_dump('tyt');
        // перемещает файл
        return rename($this->filePath, $newPath);
    }
}