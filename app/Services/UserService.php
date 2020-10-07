<?php

namespace App\Services;

use App\User;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface {
    public function getProfile($userId) {
        $details = $this->getProfileDetails($userId);
        $reputation = $this->getUserReputation($userId);

        return array(
            $details,
            "reputation" => $reputation,
        );
    }

    public function getVotes($userId, $offset, $limit) {

    }

    public function updateImage($image) {

    }

    public function deleteImage($userId) {

    }

    public function updateProfile($userId, $details) {

    }

    private function getProfileDetails($userId) {
        return array(
            "id" => $userId,
            "name" => "Jack Bardani"
        );
    }

    private function getUserReputation($userId) {
        return -50000;
    }
}
