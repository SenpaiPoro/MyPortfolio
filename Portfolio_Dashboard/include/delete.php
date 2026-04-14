<?php

require '../../config/function.php';

$parameter_result = checkId('id');

if(is_numeric($parameter_result))
{
    $usersId =  validate($parameter_result);
    $users = getByid('resume', $usersId);

     if($users['status'] == 200)
     {
        $usersDeleted = deleteQuery('resume',$usersId);

        if($usersDeleted)
        {
            redirect('../resumelist.php', 'Successfully Deleted');
                }else{
                    redirect('../resume.php', 'Someting went wrong');
                }
         }
}
?>