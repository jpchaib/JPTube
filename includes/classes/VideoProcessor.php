<?php

class VideoProcessor{

    private $con;
    private $sizeLimit = 500000000;
    private $allowedTypes = array("mp4", "fvl", "webm", "mkv", "vob", "ogv", "ogg", "avi", "wmv", "mov", "mpeg", "mpg");

    public function __construct($con) {
        $this->con = $con;
    }

    public function upload($videoUploadData) {
        $targetDir = "upload/videos/";
        $videoData = $videoUploadData->getVideoDataArray();

        $tempFilePath = $targetDir . uniqid() . baseName($videoData["name"]);
        $tempFilePath = str_replace(" ", "_", $tempFilePath);

        $isValidData = $this->processData($videoData, $tempFilePath);

        echo $tempFilePath;
        
    }

    private function processData($videoData, $filePath) {
        $videoType = pathInfo($filePath, PATHINFO_EXTENSION);

        if(!$this->isValidSize($videoData)) {
            echo "File too large. Cant's be more than " . $this->sizeLimit . " bytes.";
            return false;
        } 
        else if (!$this->isValidType($videoType)) {
            echo "Invalid file type";
            return false;
        }
    }

    private function isValidSize($data) {
        return $data["size"] <= $this->sizeLimit;
    }
    
    private function isValidType($type) {
        $lowerCased = strtolower($type);
        return in_array($lowerCased, $this->allowedTypes);
    }
}

?>