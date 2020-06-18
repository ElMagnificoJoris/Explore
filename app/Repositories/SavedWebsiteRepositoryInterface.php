<?php

namespace App\Repositories;

interface SavedWebsiteRepositoryInterface
{
    public function save($name, $link);
}
