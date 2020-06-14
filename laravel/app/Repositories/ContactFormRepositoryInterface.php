<?php

namespace App\Repositories;

interface ContactFormRepositoryInterface
{
    public function save(array $inputs);
    public function getAllContacts();
    public function getById($id);
}
