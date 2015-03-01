<?php
namespace Levelab\Model\User\Entity;

use Levelab\Model\Core\Types\Author;
use Levelab\Model\User\Values\Profile;
use Levelab\Model\User\Values\UserId;

class User implements Author {
    /**
     * @var UserId
     */
    private $id;
    private $nickname;
    private $email;
    /**
     * @var Profile
     */
    private $profile;

    /**
     * @param UserId $id
     * @param $nickname
     * @param $email
     */
    public function __construct(UserId $id, $nickname, $email) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->email = $email;
        $this->profile = new Profile(null,null,new \DateTime('now'));
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return UserId
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @return Profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param Profile $profile
     */
    public function setProfile(Profile $profile)
    {
        $this->profile = $profile;
    }
} 