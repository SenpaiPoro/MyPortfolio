<?php

require '../../config/function.php';
$parameter_result = checkId('id');

if(is_numeric($parameter_result))
{
    $usersId =  validate($parameter_result);
    $users = getByid('project', $usersId);

     if($users['status'] == 200)
     {
        $usersDeleted = deleteQuery('project',$usersId);
        if($usersDeleted)
        {
            redirect('../projectlist.php', 'Successfully Deleted');
                }else{
                    redirect('../project.php', 'Someting went wrong');
                }
         }
}
?>