<?php
namespace Levelab\Model\User\Values;

class Profile {
    protected $firstName;
    protected $lastName;
    protected $birthday;

    public function __construct($firstName, $lastName, \DateTime $birthday) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
    }

    /**
     * @return \DateTime
     */
    public function getBirthday() {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getFirstName() {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName() {
        return $this->lastName;
    }

    /**
     * @param \DateTime $birthday
     */
    public function setBirthday(\DateTime $birthday) {
        $this->birthday = $birthday;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
} 