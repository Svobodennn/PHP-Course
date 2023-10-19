<?php
//echo phpinfo(); // Provides information about PHP configuration
ini_set('display_errors', true); // set display errors to true, changes php.ini
ini_set('display_startup_errors', true); //makes the errors that occur at the start of PHP visible. So, if
// there is an error at the PHP startup, it will be displayed on the screen.

error_reporting(0); // disables error reporting
error_reporting(-1); // enables all error reporting
error_reporting(E_ALL); // enables all error reporting

// Let's report simple errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// It's good to report E_NOTICE as well (to catch uninitialized variables
// or misspelled variable names, etc.)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
// This is the default value in php.ini
error_reporting(E_ALL & ~E_NOTICE);


//Error Suppression Operator (@)
echo @$name; // It can be used to suppress errors other than Fatal Errors.

//using if
echo isset($name) ? $name : '';
echo $name ?? '';

//using try catch
try {
    // code code code

    // else
    throw new Exception('This is an error.');
} catch (Exception $e) { // PDOexception
    echo $e->getMessage();
}
echo "<hr>";


//Custom error
class MyError extends Exception
{
    public function whyphpwhy()
    {
        echo "<div style='width: 100%; padding: 30px; background: #1d1d1d; color: white'>";
        echo "Message: " . $this->message . "<br>";
        echo "Error code: " . $this->code . "<br>";
        echo "In this file: " . $this->file . "<br>";
        echo "In this line: " . $this->line . "<br>";
        echo "</div>";
    }
}

try {
    // code code code
    // else
    throw new MyError('This is an error.');
} catch (Exception $e) { // PDOexception
    $e->whyphpwhy();
}
echo "<hr>";


//Error handler
//set_error_handler(callback,errorlevel)
function errHandler($no,$msg, $file, $line){
//    echo $no;
//    echo $msg;
//    echo $file;
//    echo $line;
    include '01-error.php';
}

set_error_handler('errHandler',E_ALL);
echo $test1;
echo $test2;
echo $test3;


// Use error handler with class
class MyError2 extends Exception
{
    public function justwhy()
    {
        errHandler($this->code,$this->message,$this->file,$this->line);
    }
}

try {
    throw new MyError2('MyError2 class errHandler');
} catch (Exception $e){
    $e->justwhy();   
}

// ***   Catching Fatal Errors   ***
error_reporting(0); // disable php error reporting
function fatalErrorHandler(){
    $error = error_get_last();
//    print_r($error); // type, message, file, line
    
    errHandler($error['type'],$error['message'],$error['file'],$error['line'],);
}
register_shutdown_function('fatalErrorHandler');

undefinedFunction();