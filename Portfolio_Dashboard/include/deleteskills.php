<?php

require '../../config/function.php';
$parameter_result = checkId('id');

if(is_numeric($parameter_result))
{
    $usersId =  validate($parameter_result);
    $users = getByid('skills', $usersId);

     if($users['status'] == 200)
     {
        $usersDeleted = deleteQuery('skills',$usersId);
        if($usersDeleted)
        {
            redirect('../skills.php', 'Successfully Deleted');
                }else{
                    redirect('../skills.php', 'Someting went wrong');
                }
         }
}
?>