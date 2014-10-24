<?php

class Question extends Eloquent
{
    protected $primaryKey = 'ID';

    public static function returnOneJSON($QuestionID)
    {
        $return = [];
        if($question = Question::find($QuestionID)) {
            $return = array(
                'status'  => $question->STATUS,
                'question' => $question->toArray(),
            );
        }
        return json_encode($return, JSON_PRETTY_PRINT);
    }

    public static function returnAllJSON()
    {
        $return = [];
        if($questions = Question::all()) {
            foreach($questions as $question)
            {
                $return[$question->STATUS]['status'] = $question->STATUS;
                $return[$question->STATUS]['questions'][] = $question->toArray();
            }
            //array values removes the associative values ($question->STATUS)
            $return = array_values($return);
        }
        return json_encode($return, JSON_PRETTY_PRINT);
    }

    /* http://laravel.com/docs/4.2/eloquent#date-mutators
        Uses Carbon, which is an extension of DateTime built into Laravel
    */
    public function getDates()
    {
        return array('STARTDATE', 'ENDDATE');
    }

}
