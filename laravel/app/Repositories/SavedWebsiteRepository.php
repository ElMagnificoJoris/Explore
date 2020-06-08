<?php

namespace App\Repositories;

use App\SavedWebsite;

class SavedWebsiteRepository implements SavedWebsiteRepositoryInterface
{

    protected $savedWebsite;

    public function __construct(SavedWebsite $savedWebsite)
    {
        $this->savedWebsite = $savedWebsite;
    }

    public function save($name, $link)
    {
        $this->savedWebsite->name = $name;
        $this->savedWebsite->link = $link;
        $this->savedWebsite->save();
    }

}
