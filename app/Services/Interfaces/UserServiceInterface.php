<?php

namespace App\Services\Interfaces;

interface UserServiceInterface {
    function getProfile($userId);

    function getVotes($userId, $offset, $limit);

    function updateImage($image);

    function deleteImage($userId);

    function updateProfile($userId, $details);
}
