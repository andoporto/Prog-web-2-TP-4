<?php

// where we do all our magic
function expand_escape($string) {
    return preg_replace_callback(
        '/\\\([nrtvf]|[0-7]{1,3}|[0-9A-Fa-f]{1,2})?/',
        create_function(
            '$matches',
            'return ($matches[0] == "\\\\") ? "" : eval( sprintf(\'return "%s";\', $matches[0]) );'
        ),
        $string
    );
}

// a string to test, and show the before and after
$before = 'Quantity:\t500\nPrice:\t$5.25 each';
$after = expand_escape($before);
var_dump($before, $after);

/* Outputs:
string(34) "Quantity:\t500\nPrice:\t$5.25 each"
string(31) "Quantity:    500
Price:    $5.25 each"
*/

?>