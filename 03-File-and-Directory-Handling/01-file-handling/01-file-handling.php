<?php

/*
  * File Creation and Deletion
In PHP, the touch function is used for file creation, and the unlink function is used for file deletion.

  * File Opening
fopen allows us to open a file, the first parameter specifies the file to be opened, and the second parameter indicates the mode in which we are opening it.

fopen($file, $mode);

  * File Access Modes - File Modes

r: Read operation. Specifies that only the content of the file needs to be read.
r+: Specifies that both reading and writing to the file are necessary.
w: Specifies that only writing to the file is allowed. The content of the file is completely deleted, and writing starts from scratch.
    If the file does not exist at the specified address, it will be created anew.
w+: Specifies that both writing and reading of the file's content are allowed. The content of the file is deleted,
    and the writing process starts from the beginning. If the file does not exist at the specified address, it will be created anew.
a: Specifies that only data can be appended to the file. The content of the file is not deleted; data is added to the end.
    If the file does not exist at the specified address, it will be created anew.
a+: Specifies that both data can be appended and data can be read from the file. The content of the file is not deleted;
    data is added to the end. If the file does not exist at the specified address, it will be created anew.
x: Ensures the creation of the file and specifies that the created file needs to be opened for writing data into it.
    If a file with the same name already exists at the specified address, fopen function returns 'false.'
x+: Ensures the creation of the file and specifies that the created file needs to be opened for both writing and reading data.
    If a file with the same name already exists at the specified address, fopen function returns 'false,' resulting in an error.

  * File Closing
The fclose function is used to close a file.

  * File Reading
You can read a file line by line using the fgets() function.

  * File Writing
You can perform file writing operations using the fwrite and fputs functions.
The first parameter is the variable representing the file opened with the fopen function,
and the second parameter is the data to be added to the file.

fwrite($file, 'New line');

If the function runs successfully, it returns the byte length of the data added to the file; otherwise, it returns 'false.'

feof() checks whether the end of the file has been reached by obtaining positions during the process of reading data from the file.

  * File Writing - Second Method

You can also use file_put_contents() for file writing.

The first parameter is the file to which the data will be added, the second parameter is the data to be added,
and the third parameter specifies the mode of the data insertion. The use of the third parameter is optional.
If you define the value FILE_APPEND as the third parameter, it means that you want to append the data
to the end of the existing data in the file, without completely replacing the existing data with the new data.

file_put_contents('files/text.txt', 'content',FILE_APPEND);

  * Entity Check
In PHP, you can check the existence of a file or directory using the file_exists() function, which is one of the file and directory functions.

The is_file() function is used to check whether the provided address is a file or not.
*/

# ***   TOUCH & UNLINK    ***
/*touch('01-test-01.txt', time() - 86400); // It creates the file dated for yesterday. The creation date doesn't change, but the modification date changes.
unlink('01-test-01.txt'); // delete*/


# ***   FGETS   ***
/*$file = fopen('01-test-02.txt', 'r');

while ($line = fgets($file)){
    echo $line."<br>";
}
fclose($file);*/

# ***   FREAD   ***
/*$file = fopen('01-test-02.txt', 'r');
$size = filesize('01-test-02.txt');

echo fread($file,150)."<hr>"; // bytes
echo fread($file,$size);*/

# ***   FPUTS & FWRITE  ***
/*$file = fopen('01-test-02.txt', 'a');
fwrite($file,"\nnew data");
fputs($file,"\nsecond new data");*/

# ***   FEOF    ***
/*$file = fopen('01-test-02.txt', 'r');
while (!feof($file)){
    print_r(feof($file)); echo " #####-"; // returns true if end of file
    echo fgets($file)."<br>";
}
fclose($file);*/

# ***   FILE_EXISTS & IS_FILE
/*$check = file_exists('01-test-02.txt');
var_dump($check);
$check2 = is_file('01-test-02.txt');
var_dump($check2);*/

# ***   FILE_GET_CONTENTS & FILE_PUT_CONTENTS
/*file_put_contents('01-test-02.txt', "\nFilePutContentData", FILE_APPEND);

$get = file_get_contents('01-test-02.txt');
print_r($get);

$file = "<?php ";
$file .= '$name = "Melih";';
$file .= 'echo $name;';

file_put_contents('01-test-03.php',$file,FILE_APPEND);*/

# ***   RENAMING    ***
//rename('02-test-02.txt','02-TEST-02.txt');

# ***   MOVING  ***
//rename('02-TEST-02.txt','test/02-TEST-02.txt');