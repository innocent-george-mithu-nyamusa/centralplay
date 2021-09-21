<?php

namespace Classes;

use Exception;
use Verot\Upload\Upload;

class Utilities
{

    public static $ourMailhtml = '';
    public static $ourMailText = 'Thank you For Getting In Touch. \n We are Glad to hear from You. How can we Help You?.\n Need Help Migrating to The Cloud? Need a Mobile Application?.\n Need IOT Integration ? Need Multi-Platform Software ? \n . Then Get in touch With Us . We would be glad To communicate with you.';

    public static function uploadPhoto($item_image, $item_image_temp, $purpose): string|bool
    {
        $handle = new Upload($item_image);

        switch ($purpose) {
            case "item":
                $target_dir = "../assets/img/items/";
                break;
            case "request":
                $target_dir = "../../images/";
                break;
            default:
                $target_dir = "../assets/img/users/";

        }

        $picName = $item_image;
        $target_file = $target_dir . $picName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $name = self::genUniqueId("img");
        $handle->file_dst_name_body = $name;
        $handle->image_size = true;
        $handle->image_x = 1200;
        $handle->image_y = 1200;
        $handle->process(__DIR__ . $target_dir);
        if ($handle->processed) {
            return $name;
        } else {
            echo "error: " . $handle->error;
            return false;
        }

//            // Check if image file is a actual image or fake image
//            $check = getimagesize($item_image_temp);
//            if ($check !== false) {
//                // $message =  "File is an image - " . $check["mime"] . ".";
//            } else {
//
//                return "File is not an image";
//            }
//            // Check file size
//            if ($_FILES["itemImage"]["size"] > 500000) {
//                $message = "Failed: Sorry, your file is too large.";
//                return $message;
//            }
//            // Allow certain file formats
//            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
//                $message = "Failed: Sorry, only JPG, JPEG & PNG files are allowed.";
//                return $message;
//            }
//            // Check if $uploadOk is set to 0 by an error
//            if ($uploadOk == 0) {
//            } else {
//                try {
//                    if (move_uploaded_file($item_image_temp, $target_file)) {
//                        //   $messageSuccess =  "The file ". basename( $item_image). " has been uploaded.";
//                        return "Success: image uploaded";
//                    } else {
//                        //   $message =  "Sorry, there was an error uploading your file.";
//                        return "Failed: There was an error uploading your image";
//                    }
//                }catch (\Exception $exception) {
//                    return "Failed to upload files".$exception->getMessage();
//                }
//
//            }

    }

    public static function genUniqueId(string $pref): string
    {
        switch ($pref) {
            case "add":
                $pref = "adi";
                break;
            case "app":
                $pref = "apl";
                break;
            case "res":
                $pref = "rse";
                break;
            case "itm":
                $pref = "ite";
                break;
            case "img":
                $pref = "img";
                break;
            case "cat":
                $pref = "cat";
                break;
            case "rew":
                $pref = "rwe";
                break;
            case "req":
                $pref = "rqe";
                break;
            case "sub":
                $pref = "sbu";
                break;
            case "fin":
                $pref = "fnr";
                break;
            case "crd":
                $pref = "crd";
                break;
            case "clm":
                $pref = "mcl";
                break;
            case "mob":
                $pref = "mbo";
                break;
            default:
                $pref = "use";
        }

        $id = uniqid($pref, TRUE);
        $id = str_shuffle("$id");
        $id = md5("$id");

        return $id;
    }

    public static function deletePhoto($itemImage, $purpose): bool
    {

        switch ($purpose) {
            case "item":
                $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/LostAndFound/admin/assets/img/items/";
                break;
            default:
                $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/LostAndFound/admin/assets/img/user/";
        }

        $filename = $target_dir . $itemImage;

        try {
            unlink($filename);
            return true;
        } catch (Exception $exception) {
            echo "Failed to remove image file :" . $exception->getMessage();
            return false;
        }

    }

    public static function cleanData($user_data): string
    {
        $user_data = trim($user_data);
        $user_data = stripslashes($user_data);
        $user_data = htmlspecialchars($user_data);

        return $user_data;
    }

    public static function isLoggedIn(): bool
    {
        if (isset($_SESSION["LostAndFound"])) {
            return true;
        } else {
            return false;
        }
    }

    public static function isAdmin(): bool
    {
        if (isset($_SESSION["role"]) && ($_SESSION["role"] === "admin")) {
            return true;
        } else {
            return false;
        }
    }

    public static function isDispatcher(string $dispatcherId): bool {

        if(($_SESSION["user_id"] == $dispatcherId) || self::isAdmin()){
            return true;
        }
        return false;
    }

}
