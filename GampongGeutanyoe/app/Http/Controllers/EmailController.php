<?php

namespace App\Http\Controllers;

use App\Mail\EmailPerizinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        Mail::send(new EmailPerizinan);
        return 'Email berhasil dikirim';
    }
}
