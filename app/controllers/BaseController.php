<?php

class BaseController extends Controller
{
    function index()
    {
        return Response::make(Question::returnAllJSON());
    }

    function show($QuestionID)
    {
        return Response::make(Question::returnOneJSON($QuestionID));
    }
}
