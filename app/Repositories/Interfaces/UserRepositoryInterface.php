<?php

namespace App\Repositories\Interfaces;

interface UserRepositoryInterface {
    public function allUsers();

    public function getVotes($userId);

    public function getReceivedVotes($userId);

    public function getReceivedPaginatedVotes($userId, $offset, $limit);
}
