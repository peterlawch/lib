<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        $first = 'Alex';
        $last = 'Curtis';

        $fullname = $first . " " .$last;
        $email = "peterlawch@gmail.com";
        $data['email'] = $email;
        $data['fullname'] = $fullname;

        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }



}