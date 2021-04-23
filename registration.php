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

    /*
    DELETE FROM `users` WHERE `email` = 'i+1212@apprentice.mn';
    */

    /*
    SELECT * FROM `users`;

    SELECT * FROM `users` where username = 'username2' AND id = 1
    */
}
?>