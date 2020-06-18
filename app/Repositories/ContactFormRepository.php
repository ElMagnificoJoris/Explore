<?php

namespace App\Repositories;

use App\ContactForm;

class ContactFormRepository implements ContactFormRepositoryInterface
{

    protected $table;

    public function __construct(ContactForm $table)
    {
        $this->table = $table;
    }

    public function save(array $inputs)
    {
        $this->table->nom = $inputs['nom'];
        $this->table->prenom = $inputs['prenom'];
        $this->table->email = $inputs['email'];
        $this->table->tel = $inputs['tel'];

        if (array_key_exists('comp', $inputs))
            $this->table->comp = $inputs['comp'];

        $this->table->save();
    }

    public function getAllContacts()
    {
        return $this->table->get();
    }

    public function getById($id)
    {
        return $this->table->findOrFail($id);
    }
}
