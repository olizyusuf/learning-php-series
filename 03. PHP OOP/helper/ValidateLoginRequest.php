<?php

function ValidateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("username is null");
    } else if (!isset($request->password)) {
        throw new ValidationException("password is null");
    } else if (trim($request->username) == "") {
        throw new ValidationException("username is empty");
    } else if (trim($request->password) == "") {
        throw new ValidationException("password is empty");
    }
};
