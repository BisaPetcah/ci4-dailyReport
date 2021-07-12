<?php


namespace App\Validation;


class MyRules
{
    public function checkAccount(string $str): bool
    {
        $userModel = new \App\Models\UserModel();

        if ($userModel->getUser($str)) {
            return true;
        }

        return false;
    }
}