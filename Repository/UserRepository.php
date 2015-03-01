<?php
namespace Levelab\Model\User\Repository;

use Levelab\Model\User\Entity\User;
use Levelab\Model\User\Values\UserId;

interface UserRepository {
    public function find(UserId $userId);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);

    public function findByNickname($nickname);

    public function findByEmail($email);
}