<?php
/**
 * Created by PhpStorm.
 * User: ingolindemann
 * Date: 21.02.15
 * Time: 21:00
 */

class Folder {

        public $folders = array();
        private $folder = null;


    public function __construct($folder){
        $this->setFolder($folder);
        $this->getFolderContent();
    }

    public function setFolder($folder){
        $this->folder = $folder;
    }

    public function getFolder(){
        return $this->folder;
    }

    public function getFolderContent(){
        foreach (new DirectoryIterator($this->getFolder()) as $file) {
            // if the file is not this file, and does not start with a '.' or '..',
            // then store it for later display
            if ( (!$file->isDot())
                && ($file->getFilename() != basename($_SERVER['PHP_SELF']))
                && $file->isDir()
                && strpos($file->getFilename(), '.') !== 0) {
                // if the element is a directory add to the file name "(Dir)"
                $this->folders[] = $file->getFilename();
            }
        }
        return $this->folders;
    }
}