<?php

namespace Classes;

use DateTime;
use Exception;
use Verot\Upload\Upload;

class Utilities
{

//    TODO::ADD EMAIL TEMPLATES
    public static $ourMailhtml = '';
    public static $accountVerificationText = "\nThank You for Signing up with central Play. Click the following link to reset your account. \n";
    public static $accountPasswordResetText = "Password Reset Request\n\nPlease Click the following Link to reset your account. ";
    public static $accountPasswordResetHtml = "password html";
    public static $accountPasswordResetSubect = "Password Reset Request";
    public static $ourMailText = "";

    public static $emailVerificationSubject = "Thanks for Signing Up with Central Play. Please Verify your Account";
    public static $emailverificationHtml = "<html> Html </html>";

    public static function uploadPhoto($image, $image_temp, $purpose): string|bool
    {
        $handle = new Upload($image);

        switch ($purpose) {
            case "movie_image_small":
                $target_dir = "../movies/movieImages/";

                $name = self::genUniqueId("img")."_small";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 450;
                $handle->image_y = 620;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }
            case "movie_image_large":

                $target_dir = "../movies/movieImages/";

                $name = self::genUniqueId("img")."_large";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 1767;
                $handle->image_y = 687;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            case "movie_poster":
                $target_dir = "../movies/movieImages/";

                $name = self::genUniqueId("img")."_poster";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 1442;
                $handle->image_y = 775;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            case "movie_still_picture":
                $target_dir = "../movies/movieImages/";

                $name = self::genUniqueId("img")."_still_image";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 500;
                $handle->image_y = 300;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            case "movie_trailer_picture":
                $target_dir = "../movies/movieImages/";

                $name = self::genUniqueId("img")."_trailer";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 500;
                $handle->image_y = 300;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            case "movie_trailer_interview":
                $target_dir = "../movies/movieImages/";

                $name = self::genUniqueId("img")."_interview";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 500;
                $handle->image_y = 300;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            case "user_image":
                $target_dir = "../user/userImages/";

                $name = self::genUniqueId("use")."_user";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 500;
                $handle->image_y = 300;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            case "episode_image":
                $target_dir = "../series/episodesImages/";

                $name = self::genUniqueId("img")."_episode";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 500;
                $handle->image_y = 300;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

            default:
                $target_dir = "../actors/";

                $name = self::genUniqueId("img")."_actor";
                $handle->file_dst_name_body = $name;
                $handle->image_size = true;
                $handle->image_x = 50;
                $handle->image_y = 50;
                $handle->process(__DIR__ . $target_dir);
                if ($handle->processed) {
                    return $name;
                } else {
                    echo "error: " . $handle->error;
                    return false;
                }

        }

//        $picName = $image;

//                $target_file = $target_dir . $picName;
//                $uploadOk = 1;
//                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
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

            case "res":
                $pref = "rse";
                break;
            case "img":
                $pref = "img";
                break;
            case "cat":
                $pref = "cat";
                break;
            case "sub":
                $pref = "sbu";
                break;
            case "mov":
                $pref = "mve";
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
            case "eps":
                $pref = "epi";
                break;
            case "ser":
                $pref = "ser";
                break;
            default:
                $pref = "use";
        }

        $id = uniqid($pref, TRUE);
        $id = str_shuffle("$id");
        $id = md5("$id");

        return $id;
    }

    public static function deletePhoto($image, $purpose): bool
    {

        switch ($purpose) {

            case "movie_image_small":
                $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/centralplay/movies/movieImages/";
                break;
            case "movie_image_large":
                $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/centralplay/movies/movieImages/";
                break;
            default:
                $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/LostAndFound/admin/assets/img/user/";
        }

        $filename = $target_dir . $image;

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
        if (isset($_SESSION["centralplay"])) {
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

    public function generateCode() :string {
        $id= uniqid("cde", TRUE);
        $id = str_shuffle("$id");
        return $id;

    }


    public function isSubscriptionValid(DateTime $expirationDate){

        $currentDate = new \DateTime("now");
        $currentDate = $currentDate->format("Y-m-d");
        if($expirationDate > $currentDate){
            return true;
        }
        return false;
    }

}
