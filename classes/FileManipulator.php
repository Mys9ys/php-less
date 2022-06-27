<?php

namespace classes;

class FileManipulator
{
    public function create($filePath)
    {
        // создает файл
        $file = fopen($filePath, 'a');
        fclose($file);
    }

    public function delete($filePath)
    {
        // удаляет файл
        unlink($filePath);
    }

    public function copy($filePath, $copyPath)
    {
        // копирует файл
        copy($filePath, $copyPath);
    }

    public function rename($filePath, $newName)
    {
        // переименовывает файл
        // вторым параметром принимает новое имя файла (только имя, не путь)
        rename($filePath, pathInfo($filePath)['dirname'] . '/' . $newName);
    }

    public function replace($filePath, $newPath)
    {
        // перемещает файл
        rename($filePath, $newPath);
    }

    public function weigh($filePath)
    {
        // узнает размер файла
        return filesize($filePath);
    }
}