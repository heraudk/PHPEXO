<?php


function translate($word, $direction)
{
   
    $dictionary =
    [
        'cat'    => 'chat',
        'dog'    => 'chien',
        'monkey' => 'singe',
        'sea'    => 'mer',
        'sun'    => 'soleil'
    ];


  
    switch($direction)
    {
        case 'toFrench':
     
        if(array_key_exists($word, $dictionary) == true)
        {
            
            $translatedWord = $dictionary[$word];

            $message = "Le mot '$word' se traduit par '$translatedWord'.";
        }
        else
        {
           
            $message = "Je ne connais pas le mot '$word'.";
        }
        break;

        case 'toEnglish':
        
        if(in_array($word, $dictionary) == true)
        {
           
            $translatedWord = array_search($word, $dictionary);

            $message = "Le mot '$word' se traduit par '$translatedWord'.";
        }
        else
        {
            
            $message = "Je ne connais pas le mot '$word'.";
        }
        break;

        default:
        $message = "Je ne sais traduire qu'en français et en anglais !";
    }

    return $message;
}



$result = null;



$direction = 'toFrench';
if(array_key_exists('direction', $_POST) == true)
{
    
    $direction = $_POST['direction'];
}

if(array_key_exists('word', $_POST) == true)
{
   
    $word = strtolower($_POST['word']);

    
    $result = translate($word, $direction);
}



include 'index.phtml';

?>