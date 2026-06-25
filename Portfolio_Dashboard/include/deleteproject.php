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
            $FeatureDeleted = "DELETE FROM project_img WHERE user_id = $usersId";
            $query = mysqli_query($conn, $FeatureDeleted);
            redirect('../projectlist.php', 'Successfully Deleted');
                }else{
                    redirect('../project.php', 'Someting went wrong');
                }
         }
}
?>