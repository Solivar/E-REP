<?php

namespace App\Repositories;

use App\User;
use App\Vote;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function allUsers() {
        return User::all();
    }

    public function getUser($userId) {
        return User::find($userId);
    }

    public function getVotes($userId) {
        $user = $this->getUser($userId);

        return $user->votes;
    }

    public function getReceivedVotes($userId) {
        $votes = Vote::where('receiver_id', $userId)->get();

        return $votes;
    }

    public function getReceivedPaginatedVotes($userId, $offset, $limit) {
        $votes = Vote::where('receiver_id', $userId)->offset($offset)->limit($limit)->get();

        return $votes;
    }

    public function createVote($userId, $vote) {
        $user = $this->getUser($userId);

        $userVote = $user->votes()->create($vote);

        return $userVote;
    }

    public function updateUser($userId, $details) {
        $user = $this->getUser($userId);

        $user->update($details);

        return $user;
    }
}
