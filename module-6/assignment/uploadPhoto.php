<?php
class UploadPhoto{
    private $uploded = 1;
    private $photo_name;
    private $photo_tmp_name;
    function __construct($file_name,$fileuploaded){
        try{
            if($_FILES[$file_name]){
                $photo_name = $fileuploaded.$_FILES[$file_name]['name'];
                $photo_type = strtolower(pathinfo($photo_name)["extension"]);
                $photo_tmp_name = $_FILES[$file_name]['tmp_name'];
                $photo_size = $_FILES[$file_name]['size'];

                $this->photo_name = str_replace(" ","_",$photo_name);
                $this->photo_tmp_name = $photo_tmp_name;

                if(file_exists($photo_name)){
                    $this->uploded = 0;
                    throw new Exception("Sorry, file already exists");
                }
                if($photo_size > 5*1024*1024){
                    $this->uploded = 0;
                    throw new Exception("Sorry, your file is too large");
                }
                $allowed_file_type = ['jpg','png','jpeg'];
                if(!in_array($photo_type,$allowed_file_type)){
                    $this->uploded = 0;
                    throw new Exception("Sorry, only JPG, PNG, and JPEG file are allowed");
                }
            }else{
                $this->uploded = 0;
                throw new Exception("Please select photo");
            }
        }catch(Exception $e){
            echo $e->getMessage()."<br/>";
        }
    }
    function photo_uploaded(){
        if(1==$this->uploded){
            if(!move_uploaded_file($this->photo_tmp_name,$this->photo_name)){
                echo "Try again";
            }
        }
    }
    function get_photo_name(){
        return $this->photo_name;
    }
    function get_error(){
        return $this->uploded;
    }
}