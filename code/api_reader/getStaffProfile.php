<?php

$get_profile = "http://itnthackathon.bweas.tm.com.my/api/xml/getStaffProfile";

$xml_profile_string = new SimpleXMLElement(file_get_contents($get_profile));
# http://itnthackathon.bweas.tm.com.my/api/xml/getStaffProfile

echo $xml_profile_string;
//$xml=simplexml_load_string($note);
//print_r($xml);





if (($response_xml_data = file_get_contents($get_profile))===false){
    echo "Error fetching XML\n";
} else {
   libxml_use_internal_errors(true);
   $data = simplexml_load_string($response_xml_data);
   if (!$data) {
       echo "Error loading XML\n";
       foreach(libxml_get_errors() as $error) {
           echo "\t", $error->message;
       }
   } else {

      //print_r($data);
       //$staffnum="B16645";
       $i_item = 0;
      
     do {

     $STAFF_NUMBER =$data->item->hash->item[1]->list->item[$i_item]->list->item[5];
    $i_item++;
} while ($STAFF_NUMBER != $staffnum);

     $i_item =$i_item-1;


      $PERSNO = $data->item->hash->item[1]->list->item[$i_item]->list->item[0];
      $FULL_NAME =$data->item->hash->item[1]->list->item[$i_item]->list->item[1];
      $GEN =$data->item->hash->item[1]->list->item[$i_item]->list->item[2];
      $BIRTH_DATE =$data->item->hash->item[1]->list->item[$i_item]->list->item[3];
      $MARST =$data->item->hash->item[1]->list->item[$i_item]->list->item[4];
      $STAFF_NUMBER =$data->item->hash->item[1]->list->item[$i_item]->list->item[5];
      $PHONE_NUMBER =$data->item->hash->item[1]->list->item[$i_item]->list->item[6];
      $Email =$data->item->hash->item[1]->list->item[$i_item]->list->item[7];
      $ESgrp=$data->item->hash->item[1]->list->item[$i_item]->list->item[8];
      $ORG_Unit_T527X=$data->item->hash->item[1]->list->item[$i_item]->list->item[9];
      $Unit=$data->item->hash->item[1]->list->item[$i_item]->list->item[10];
      $HR_DATAcol=$data->item->hash->item[1]->list->item[$i_item]->list->item[11];
      $Position=$data->item->hash->item[1]->list->item[$i_item]->list->item[12];
      $Supervisor_Pener=$data->item->hash->item[1]->list->item[$i_item]->list->item[13];
      $Supervisor_Name=$data->item->hash->item[1]->list->item[$i_item]->list->item[14];
      $SV_Staff_number=$data->item->hash->item[1]->list->item[$i_item]->list->item[15];
      $SV_Phone_number=$data->item->hash->item[1]->list->item[$i_item]->list->item[16];
      $SV_Email=$data->item->hash->item[1]->list->item[$i_item]->list->item[17];
      $Picture_URL=$data->item->hash->item[1]->list->item[$i_item]->list->item[18];
      $Data1=$data->item->hash->item[1]->list->item[$i_item]->list->item[19];



     
      echo $PERSNO."<br>";
      echo $FULL_NAME."<br>";
      echo $GEN."<br>";
      echo $BIRTH_DATE."<br>";
      echo $MARST."<br>";
      echo $STAFF_NUMBER."<br>";
      echo $PHONE_NUMBER."<br>";
      echo $Email."<br>";
      echo $ESgrp."<br>";
      echo $ORG_Unit_T527X."<br>";
      echo $Unit."<br>";
      echo $HR_DATAcol."<br>";
      echo $Position."<br>";
      echo $Supervisor_Pener."<br>";
      echo $Supervisor_Name."<br>";
      echo $SV_Staff_number."<br>";
      echo $SV_Phone_number."<br>";
      echo $SV_Email."<br>";
      echo $Picture_URL."<br>";
      echo $Data1."<br>";
      
      

     // echo array_search("B15365",$data);

   }
}
?>
