<?php
$aar= 
['ApprenticeMGL','asdf','asfdkljasfd@asdfasdf.com','asdfasdf','asdfasf'];
['ApprenticeMGL','asdf','asfdkljasfd@asdfasdf.com','asdfasdf','asdfasf'];
['ApprenticeMGL','asdf','asfdkljasfd@asdfasdf.com','asdfasdf','asdfasf'];
['ApprenticeMGL','asdf','asfdkljasfd@asdfasdf.com','asdfasdf','asdfasf'];
print_r($aar);

if(isset($_POST['email'])) {
    print_r($_POST);
    /*
    INSERT INTO `users` 
           (`username`, `email`,          `password`, `name`) 
    VALUES ('apprenticemgl', 'i@apprentice.mn', 'asdfasdfafsdfas', 'Apprentice MGL');
    */

    /*
    UPDATE `users` SET `email` = 'apprenticemgl@gmail.com' WHERE id = 1;
    */
}
?>