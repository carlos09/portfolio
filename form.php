<?php        
/*        $file = 'form2.txt';

        $postdata = file_get_contents("php://input");
        $data = json_decode($postdata, true);


        $data_insert = "Name: " . $data['name'] .
                ", Email: " . $data['email'] . 
                ", Message: " . $data['message']; 


        print $data_insert;
               file_put_contents($file, $data_insert, FILE_APPEND | LOCK_EX);
 */

        $file = 'form2.txt';

        $postdata = file_get_contents("php://input");
        $data = json_decode($postdata, true);


        $data_insert = "Name: " . $data['firstname'] .
                ", Email: " . $data['emailaddress'] . 
                ", Description: " . $data['textareacontent'] . 
                ", Gender: " . $data['gender'] . 
                ", Is a member: " . $data['member'];


        //print $data_insert;

        file_put_contents($file, $data_insert, FILE_APPEND | LOCK_EX);
?>
