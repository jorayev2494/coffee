<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Contacts\ContactRequest;
use Illuminate\Validation\Rule;
use Validator;

class ContactController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->contact_r = new Repository(new Contact);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Контакты";
        $contacts = $this->contact_r->get();
        return $this->outputAdnView("admin.templates.contacts.index", compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Создать контакт";
        return $this->outputAdnView("admin.templates.contacts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $data = $request->except("_token");
        $data["active"] = $request->active ? true : false;
        $this->contact_r->create($data);
        return redirect()->route("admin.contacts.index")->with("success", "Контакт успешно добавлен");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация о контакте";
        $contact = $this->contact_r->getById($id);
        return $this->outputAdnView("admin.templates.contacts.show", compact("contact"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Редактировать контакт";
        $contact = $this->contact_r->getById($id);
        return $this->outputAdnView("admin.templates.contacts.edit", compact("contact"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = $this->contact_r->getById($id);
        $data = $request->except("_method", "_token");

        $variable = Validator::make($data, [
            "email" => ["required", "email", Rule::unique('contacts')->ignore($contact->email)],
        ]);

        $data["active"] = $request->active ? true : false;
        $contact->update($data);
        return redirect()->route("admin.contacts.index")->with("success", "Контакт успешно обновлен");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contact_r->getById($id)->delete();
        return redirect()->route("admin.contacts.index")->with("success", "Контакт успешно удален");
    }
}
