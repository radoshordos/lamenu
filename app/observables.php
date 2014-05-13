<?php

// User Login event
Event::listen('adm.user.login', function ($userId, $email) {
    Session::put('userId', $userId);
    Session::put('email', $email);
});

// User logout event
Event::listen('adm.user.logout', function () {
    Session::flush();
});

// Subscribe to User Mailer events
Event::subscribe('Authority\Mailers\UserMailer');