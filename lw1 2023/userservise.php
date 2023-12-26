<?php

class UserService {
    public static function sortByUsername(array $users, bool $ascending = true): array {
        usort($users, function (User $a, User $b) use ($ascending) {
            if ($a->username === $b->username) {
                return 0;
            }
            return ($a->username < $b->username) === $ascending ? -1 : 1;
        });
        return $users;
    }

    public static function sortByBirthday(array $users, bool $ascending = true): array {
        usort($users, function (User $a, User $b) use ($ascending) {
            if ($a->birthday === null || $b->birthday === null) {
                return 0;
            }
            return ($a->birthday < $b->birthday) === $ascending ? -1 : 1;
        });
        return $users;
    }
}