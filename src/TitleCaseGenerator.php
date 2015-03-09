<?php
 class TitleCaseGenerator {

    function makeTitleCase($input_title)
    {

        $take_and_separate= explode(" ", $input_title);
        $array =array();

        foreach($take_and_separate as $word )
        {
            array_push($array , ucfirst($word));
        }
        return implode(" ", $array);
    }


 } ?>
