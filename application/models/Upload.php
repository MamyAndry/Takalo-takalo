<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Model {
    public function importImage(){
        $filenames=[];
        if(isset($_POST['submit'])) {
            $files = $_FILES['files'];
            $uploadDir = 'uploads/';
            foreach($files['name'] as $index => $fileName) {
                $fileTmpName = $files['tmp_name'][$index];
                $fileSize = $files['size'][$index];
                $fileError = $files['error'][$index];
                $fileType = $files['type'][$index];
    
                $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
                $fileExtension = strtolower($fileExtension);
    
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    
                if(in_array($fileExtension, $allowedExtensions)) {
                    if($fileError === 0) {
                        if($fileSize <= 3000000) {
                        $newFileName = uniqid() . '.' . $fileExtension;
                        $destination = $uploadDir . $newFileName;
                        if(move_uploaded_file($fileTmpName, $destination)) {
                            array_push($filenames,$newFileName);
                            echo "File $fileName was successfully uploaded<br>";
                        } else {
                            echo "There was an error uploading file $fileName<br>";
                        }
                        } else {
                            echo "File $fileName is too big<br>";
                        }
                    } else {
                        echo "There was an error uploading file $fileName<br>";
                    }
                } else {
                    echo "File $fileName has an unsupported file extension<br>";
                }
            }
        }
        return $filenames;
    }
}
    