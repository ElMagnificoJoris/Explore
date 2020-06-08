<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserHasAdminPrivileges;
use App\Repositories\SavedWebsiteRepository;
use App\Http\Requests\SavedWebsiteCreateRequest;
use Illuminate\Support\Facades\DB;

class SavedWebsiteController extends Controller
{
    protected $savedWebsiteRepository;

    public function __construct(SavedWebsiteRepository $savedWebsiteRepository)
    {
        $this->middleware(UserHasAdminPrivileges::class); // we check if the user is authorised to be here

        $this->savedWebsiteRepository = $savedWebsiteRepository;
    }

    public function getForm()
    {
        return view('save_website');
    }

    public function postForm(SavedWebsiteCreateRequest $request)
    {
        $this->savedWebsiteRepository->save($request->input('name'), $request->input('link'));

        return view('save_website_ok');
    }

    public function deleteWebsite(string $name)
    {
        DB::table('savedwebsites')->where('name', $name)->delete();

        return back();
    }
}
