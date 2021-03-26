<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUsRequest;
use App\Models\ContactUsMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(ContactUsRequest $request)
    {
        $message = ContactUsMessage::create($request->validated());
        return back()->withSuccess('Your message sended succfully! thanks for contact us');
    }
}
