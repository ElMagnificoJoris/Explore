<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserHasAdminPrivileges;
use App\Repositories\ContactFormRepository;
use App\Http\Requests\ContactFormCreateRequest;
use Illuminate\Support\Facades\DB;

class ContactFormController extends Controller
{
    protected $contactFormRepository;

    public function __construct(ContactFormRepository $contactFormRepository)
    {
        $this->contactFormRepository = $contactFormRepository;
    }

    public function getForm()
    {
        return view('contact');
    }

    public function postForm(ContactFormCreateRequest $request)
    {
        $this->contactFormRepository->save($request->all());

        return view('contact_ok');
    }

    public function admin_view()
    {
        $contacts = $this->contactFormRepository->getAllContacts();

        return view('contact_admin', compact('contacts'));
    }

    public function viewContact(int $id)
    {
        $contact = $this->contactFormRepository->getById($id);

        return view('contact_admin_view', compact('contact'));
    }


    public function deleteContact(int $id)
    {
        DB::table('contact_form')->where('id', $id)->delete();

        return redirect()->back();
    }
}
