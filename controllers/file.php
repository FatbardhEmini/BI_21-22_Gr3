<?php

class File {
    private string $file_name;
    private string $file_path;

    public function __construct($fileName, $filePath)
    {
        $this->file_name = $fileName;
        $this->file_path = $filePath;
    }

    public function setFileName(string $fileName) {
        $this->file_name = $fileName;
    }

    public function getFileName() {
        return $this->file_name;
    }

    public function setFilePath(string $filePath) {
        $this->file_name = $filePath;
    }

    public function getFilePath() {
        return $this->file_path;
    }

    public function read() {
        $file = fopen("data/" . $this->file_path, "r") or die("Unable to open file!");
        $msgs = fread($file, filesize("data/" . $this->file_path));
        fclose($file);
        return $msgs;
    }

    public function write($message) {
        $file = fopen("../data/" . $this->file_path, "a") or die("Unable to open file");
        fwrite($file, $message);
        fclose($file);
    }

    
    public function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}