<?php


namespace App\Data;


class UserDTO
{
    private int $id;
    private string $username;
    private string $password;
    private string $fullName;
    private string $bornOn;

    public static function create($username, $password, $fullName, $bornOn, $id = null): UserDTO
    {
        return (new UserDTO())
            ->setUsername($username)
            ->setPassword($password)
            ->setFullName($fullName)
            ->setBornOn($bornOn);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): UserDTO
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername($username): UserDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword($password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return UserDTO
     */
    public function setFullName(string $fullName): UserDTO
    {
        $this->fullName = $fullName;
        return $this;
    }



    public function getBornOn(): string
    {
        return $this->bornOn;
    }

    public function setBornOn($bornOn): UserDTO
    {
        $this->bornOn = $bornOn;
        return $this;
    }


}