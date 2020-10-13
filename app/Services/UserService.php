<?php

namespace App\Services;

use App\User;
use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\UserRepository;

class UserService implements UserServiceInterface {
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getProfile($userId) {
        $details = $this->getProfileDetails($userId);
        $reputation = $this->getReputation($userId);

        return array(
            $details,
            "reputation" => $reputation,
        );
    }

    public function getReceivedVotes($userId, $page = 1, $limit = 5) {
        if (is_null($page) || $page <= 0) {
            $page = 1;
        }

        $offset = ($page - 1) * $limit;
        $votes = $this->userRepository->getReceivedPaginatedVotes($userId, $offset, $limit);

        return $votes;
    }

    public function createVote($userId, $vote) {
        $vote = $this->userRepository->createVote($userId, $vote);

        return $vote;
    }

    public function updateImage($image) {

    }

    public function deleteImage($userId) {

    }

    public function updateProfile($userId, $details) {
        $user = $this->userRepository->updateUser($userId, $details);

        return $user;
    }

    private function getProfileDetails($userId) {
        $user = $this->userRepository->getUser($userId);

        return array(
            "id" => $user->id,
            "name" => $user->name,
        );
    }

    private function getReputation($userId) {
        $votes = $this->userRepository->getReceivedVotes($userId);
        $reputation = 0;

        foreach ($votes as $vote) {
            $reputation += $vote->value;
        }

        return $reputation;
    }
}
