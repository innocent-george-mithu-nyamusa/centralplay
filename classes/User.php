<?php


namespace Classes;


use DateTime;
use Exception;
use PDO;

class User extends Dbh
{
    private string $userId;
    private string $userFirstname;
    private string $userLastame;
    private string $userEmail;
    private string $userDoB;
    private string $userImage;
    private string $userPhone;
    private string $userBuilding;
    private string $userFloor;
    private string $userStreet;
    private string $userTown;
    private string $userCountry;
    private string $userBio;
    private string $userLinkedIn;
    private string $userFacebook;
    private string $username;
    private string $userOldPassword;
    private string $newPassword;
    private float $earnings;
    private float $adminEarnings;
    private string $verificationCode;

    /**
     * @param float $earnings
     */
    protected function setEarnings(float $earnings): void
    {
        $this->earnings = $earnings;
    }

    /**
     * @param float $adminEarnings
     */
    protected function setAdminEarnings(float $adminEarnings): void
    {
        $this->adminEarnings = $adminEarnings;
    }

    protected function setVerificationCode(string $verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    /**
     * @param string $userOldPassword
     */
    protected function setUserOldPassword(string $userOldPassword): void
    {
        $this->userOldPassword = $userOldPassword;
    }

    /**
     * @param string $newPassword
     */
    protected function setNewPassword(string $newPassword): void
    {
        $this->newPassword = $newPassword;
    }


    /**
     * @param string $username
     */
    protected function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @param string $userBio
     */
    protected function setUserBio(string $userBio): void
    {
        $this->userBio = $userBio;
    }

    /**
     * @param mixed $userFacebook
     */
    protected function setUserFacebook($userFacebook): void
    {
        $this->userFacebook = $userFacebook;
    }

    /**
     * @param mixed $userLinkedIn
     */
    protected function setUserLinkedIn($userLinkedIn): void
    {
        $this->userLinkedIn = $userLinkedIn;
    }


    protected function setUserId($userId)
    {
        $this->userId = $userId;
    }

    protected function getUserResult(): ?array
    {
        return $this->getUser();
    }

    private function getUser(): ?array
    {
        try {
            $singleUserQuery = "SELECT * FROM user WHERE user_id=?";
            $singleUserStmt = $this->connect()->prepare($singleUserQuery);
            $singleUserStmt->execute([$this->userId]);
            return $singleUserStmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $exception) {
            echo "Fetching user failed" . $exception->getMessage();
            return null;
        }

    }

    protected function setUserFirstName($firstname): void
    {
        $this->userFirstname = $firstname;
    }

    protected function setUserLastName($lastname): void
    {
        $this->userLastame = $lastname;
    }

    protected function setUserEmail($email): void
    {
        $this->userEmail = $email;
    }

    protected function setUserDoB($dob): void
    {
        $this->userEmail = $dob;
    }

    protected function setUserImage($image): void
    {
        $this->userEmail = $image;
    }

    protected function setUserPhone($phone): void
    {
        $this->userEmail = $phone;
    }

    protected function setUserBuilding($building): void
    {
        $this->userBuilding = $building;
    }

    protected function setUserStreet($street): void
    {
        $this->userStreet = $street;
    }

    protected function setUserFloor($floor): void
    {
        $this->userFloor = $floor;
    }

    protected function setUserTown($town): void
    {
        $this->userTown = $town;
    }

    protected function setUserCountry($country): void
    {
        $this->userCountry = $country;
    }

    protected function getAgentsResult(): ?array
    {
        return $this->getAgents();
    }

    private function getAgents(): ?array
    {
        try {
            $agentsUserQuery = "SELECT * FROM user WHERE user_role='agent' LIMIT 20";
            $agentsUserStmt = $this->connect()->prepare($agentsUserQuery);
            $agentsUserStmt->execute();
            $users = $agentsUserStmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (Exception $exception) {
            echo "Fetching user failed" . $exception->getMessage();
            return null;
        }

    }

    protected function getAllAgentsResult(): ?array
    {
        return $this->getAllAgents();
    }

    private function getAllAgents(): ?array
    {
        try {
            $agentsUserQuery = "SELECT * FROM user WHERE user_role='agent'";

            $agentsUserStmt = $this->connect()->prepare($agentsUserQuery);
            $agentsUserStmt->execute();
            $users = $agentsUserStmt->fetchAll(PDO::FETCH_ASSOC);
            $agentsUserStmt->closeCursor();

            return $users;
        } catch (Exception $exception) {
            echo "Fetching user failed" . $exception->getMessage();
            return null;
        }

    }

    protected function updateUserStatus(): bool
    {
        return $this->updateUser();
    }

    private function updateUser()
    {
        try {
            $updateUserQuery = "UPDATE user SET user_fullname=:firstname, user_email=:email, user_dob=:DoB, user_image=:image, user_phone=:phone  ";
            $updateUserQuery .= "user_building=:building, user_floor=:floor, user_street=:street, user_town=:town, user_country=:country, user_bio=:bio, user_linkedIn=:linkedIn, user_facebook=:facebook ";
            $updateUserQuery .= "WHERE user_id=:userId";

            $updateUserStmt = $this->connect()->prepare($updateUserQuery);
            $updateUserStmt->bindParam(":firstname", $this->userFirstname);
            $updateUserStmt->bindParam(":lastname", $this->userLastame);
            $updateUserStmt->bindParam(":email", $this->userEmail);
            $updateUserStmt->bindParam(":DoB", $this->userDoB);
            $updateUserStmt->bindParam(":image", $this->userImage);
            $updateUserStmt->bindParam(":phone", $this->userPhone);
            $updateUserStmt->bindParam(":building", $this->userBuilding);
            $updateUserStmt->bindParam(":floor", $this->userFloor);
            $updateUserStmt->bindParam(":street", $this->userStreet);
            $updateUserStmt->bindParam(":town", $this->userTown);
            $updateUserStmt->bindParam(":country", $this->userCountry);
            $updateUserStmt->bindParam(":bio", $this->userBio);
            $updateUserStmt->bindParam(":linkedIn", $this->userLinkedIn);
            $updateUserStmt->bindParam(":facebook", $this->userFacebook);

            return $updateUserStmt->execute();
        } catch (Exception $exception) {
            echo "Failed to update user: " . $exception->getMessage();
            return false;
        }
    }

    protected function checkUsernameStatus(): bool|int
    {
        return $this->checkUsername();
    }

    private function checkUsername(): bool|int
    {

        try {
            $usernameQuery = "SELECT * FROM user WHERE username=:username";
            $usernameStmt = $this->connect()->prepare($usernameQuery);
            $usernameStmt->bindParam(":username", $this->username);
            $usernameStmt->execute();
            if ($usernameStmt->rowCount() > 0) {
                $usernameStmt->closeCursor();
                return true;
            }
            $usernameStmt->closeCursor();
            return false;
        } catch (Exception $exception) {
            echo "Error in finding username " . $exception->getMessage();
            return false;
        }
    }


    protected function checkEmailStatus(): bool
    {
        return $this->checkEmail();
    }

    private function checkEmail(): bool
    {
        try {
            $emailSearchQuery = "SELECT * FROM user WHERE user_email=:userEmail";
            $emailStmt = $this->connect()->prepare($emailSearchQuery);
            $emailStmt->bindParam(":userEmail", $this->userEmail);
            $emailStmt->execute();
            if ($emailStmt->rowCount() > 0) {
                $emailStmt->closeCursor();
                return true;
            }
            $emailStmt->closeCursor();
            return false;

        } catch (Exception $exception) {
            echo "Error in finding email " . $exception->getMessage();
            return false;
        }
    }


    protected function updatePasswordStatus(): bool
    {
        return self::updatePassword();
    }

    private function updatePassword(): bool
    {
        try {
            $getPasswordUpdateQuery = "SELECT user_password FROM user WHERE user_id=:userId";
            $getPasswordUpdateStmt = $this->connect()->prepare($getPasswordUpdateQuery);
            $getPasswordUpdateStmt->bindParam(":userId", $this->userId);
            $getPasswordUpdateStmt->execute();
            $result = $getPasswordUpdateStmt->fetchAll(PDO::FETCH_ASSOC);
            $getPasswordUpdateStmt->closeCursor();

            if (password_verify($this->userOldPassword, $result[0]["user_password"])) {

                $updatePasswordQuery = "UPDATE user SET user_password=:userPassword WHERE user_id=:userId";
                $updatePasswordStmt = $this->connect()->prepare($updatePasswordQuery);
                $updatePasswordStmt->bindParam(":userPassword", $this->newPassword);
                $updatePasswordStmt->bindParam(":userId", $this->userId);
                return $updatePasswordStmt->execute();
            }
            return false;
        } catch (Exception $exception) {
            echo "Failed to update password " . $exception->getMessage();
            return false;
        }
    }
    protected function getAllUsersResult(): ?array
    {
        return $this->getAllUsers();
    }

    private function getAllUsers(): ?array {
        try {
            $allUsersQuery = "SELECT * FROM user WHERE username!='anonymous'";
            $allUsersStmt = $this->connect()->prepare($allUsersQuery);
            $allUsersStmt->execute();
            $result = $allUsersStmt->fetchAll(PDO::FETCH_ASSOC);
            $allUsersStmt->closeCursor();
            return $result;
        } catch (Exception $exception) {
            echo "Failed to get all users" . $exception->getMessage();
            return null;
        }
    }

    protected function getAllGeneralUsersResult(): ?array
    {
        return self::getGeneralUsers();
    }
    private function getGeneralUsers(): ?array {
        try {
            $allUsersQuery = "SELECT * FROM user WHERE username!='anonymous' AND user_role!='agent' AND user_role!='admin'";
            $allUsersStmt = $this->connect()->prepare($allUsersQuery);
            $allUsersStmt->execute();
            $result = $allUsersStmt->fetchAll(PDO::FETCH_ASSOC);
            $allUsersStmt->closeCursor();
            return $result;
        } catch (Exception $exception) {
            echo "Failed to get all users" . $exception->getMessage();
            return null;
        }
    }

    protected function disableUserStatus(): bool {
       return self::disableUser();
    }
    private function disableUser(): bool {
        try {
            $updateStatus = "UPDATE user SET user_status='disabled' WHERE user_id=:userId";
            $updateStatusStmt = $this->connect()->prepare($updateStatus);
            $updateStatusStmt->bindParam(":userId", $this->userId);
            $result = $updateStatusStmt->execute();
            $updateStatusStmt->closeCursor();
            return $result;
        }catch (Exception $exception) {
            echo "Failed to delete user" . $exception->getMessage();
            return false;
        }
    }

    protected function addAdminEarningsStatus(): bool {
        return self::adminEarnings();
    }

    private function adminEarnings(): bool {
        try {
            $updateAdminEarnings  = "UPDATE user SET user_earnings=:userEarnings WHERE user_id=:userId";
            $updateAdminEarningsStmt = $this->connect()->prepare($updateAdminEarnings);
            $updateAdminEarningsStmt->bindParam(":userEarnings", $this->adminEarnings);
            $result = $updateAdminEarningsStmt->execute();
            $updateAdminEarningsStmt->closeCursor();
            return $result;

        }catch (Exception $exception) {
            echo "Failed to add admin earnings user" . $exception->getMessage();
            return false;
        }
    }


    protected function addUserEarningsStatus(): bool {
        return self::addEarnings();
    }

    private function addEarnings(): bool {

        try {
            $selectEarnings = "SELECT user_earnings FROM user WHERE user_id=:userId";
            $selectEarningsStmt = $this->connect()->prepare($selectEarnings);
            $selectEarningsStmt->bindParam(":userId", $this->userId);
            $selectEarningsStmt->execute();
            $earnings = $selectEarningsStmt->fetchColumn();
            $earnings = $earnings + $this->earnings;

            $selectEarningsStmt->closeCursor();

            $updateStatus = "UPDATE user SET user_earnings=:earnings WHERE user_id=:userId";
            $updateStatusStmt = $this->connect()->prepare($updateStatus);
            $updateStatusStmt->bindParam(":userId", $this->userId);
            $updateStatusStmt->bindParam(":earnings", $earnings);
            $result = $updateStatusStmt->execute();
            $updateStatusStmt->closeCursor();

            return $result;
        }catch (Exception $exception) {
            echo "Failed to delete user" . $exception->getMessage();
            return false;
        }
    }

    private function updateUserVerification(): bool {
        try {
            $updateUserStatusQuery = "UPDATE user SET user_status='verified' WHERE user_email=:userEmail";
            $updateUserStatusStmt = $this->connect()->prepare($updateUserStatusQuery);
            $updateUserStatusStmt->bindParam(":userEmail", $this->userEmail);
            $result = $updateUserStatusStmt->execute();
            $updateUserStatusStmt->closeCursor();
            return $result;
        }catch (Exception $exception){
            echo "Failed to update user" . $exception->getMessage();
            return false;
        }
    }
    protected function userVerificationStatus(): bool {
        return $this->verifyUser();
    }

    private function verifyUser(): bool {
        $currentTime = new DateTime("now");
        $currentTime = $currentTime->format("Y-m-d H:i");


        try {
            $verificationQuery = "SELECT COUNT(*), account_code_expiry FROM account_verification_codes WHERE account_verification_code=:accountVerificationCode AND account_email_verify=:accountUserEmail";
            $verificationStmt = $this->connect()->prepare($verificationQuery);
            $verificationStmt->bindParam(":accountVerificationCode", $this->verificationCode);
            $verificationStmt->bindParam(":accountUserEmail", $this->userEmail);
            $verificationStmt->execute();
            $verifiedUser = $verificationStmt->fetchColumn();
            $results = $verificationStmt->fetchAll(PDO::FETCH_ASSOC);

            $verificationStmt->closeCursor();

            if(!$results[0]["account_code_expiry"]) {
                return false;
            }

            if($results[0]["account_code_expiry"] < $currentTime){
                return false;
            }

            if($verifiedUser > 0 AND $this->updateUserVerification()) {

                $removeVerificationQuery = "DELETE FROM account_verification_codes WHERE account_email_verify=:userEmail";
                $removeVerificationStmt = $this->connect()->prepare($removeVerificationQuery);
                $removeVerificationStmt->bindParam(":userEmail", $this->userEmail);
                return $removeVerificationStmt->execute();
            }
            return false;
        }catch (Exception $exception) {
            echo "Failed to verify user ". $exception->getMessage();
            return false;
        }

    }

    protected function checkPasswordVerificationCodeStatus(): bool {
        return $this->checkPasswordverificationCode();
    }


    private function checkPasswordVerificationCode(): bool {
        try {
            $passwordVerificationCodeCheckQuery = "SELECT COUNT(*) FROM password_reset_codes WHERE account_verification_code=:verificationCode";
            $passwordVerificationCodeCheckStmt = $this->connect()->prepare($passwordVerificationCodeCheckQuery);
            $passwordVerificationCodeCheckStmt->bindParam(":verificationCode", $this->verificationCode);
            $passwordVerificationCodeCheckStmt->execute();
            $codes = $passwordVerificationCodeCheckStmt->fetchColumn();
            $passwordVerificationCodeCheckStmt->closeCursor();
            if($codes > 0) {
            return true;
            }
            return false;
        }catch (Exception $exception) {
            echo "Failed to verify password Verification code ". $exception->getMessage();
            return false;
        }
    }
}


