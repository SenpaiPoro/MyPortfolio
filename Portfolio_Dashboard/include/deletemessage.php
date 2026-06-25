<?php

require '../../config/function.php';

$parameter_result = checkId('id');

if(is_numeric($parameter_result))
{
    $usersId =  validate($parameter_result);
    $users = getByid('messages', $usersId);

     if($users['status'] == 200)
     {
        $usersDeleted = deleteQuery('messages',$usersId);

        if($usersDeleted)
        {
            redirect('../messages.php', 'Successfully Deleted');
                }else{
                    redirect('../messages.php', 'Someting went wrong');
                }
         }
}
?>