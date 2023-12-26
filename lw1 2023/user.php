<?php

class User
{
    public string $username;
    public string $password;
    public DateTime $birthday;

    public function __construct(string $username, string $password, string $birthday)
    {
        $this->username = $username;
        $this->password = $password;

        if (self::isValidDate($birthday)) {
            $this->birthday = new DateTime($birthday);
        } else {
            $this->birthday = null;
        }
    }

    private static function isValidDate(string $date): bool
    {
        $dateTime = DateTime::createFromFormat('Y-m-d', $date);
        return $dateTime && $dateTime->format('Y-m-d') === $date;
    }
}
