<?
 $xml = "http://itnthackathon.bweas.tm.com.my/api/xml/getStaffProfile";
$source = $xml;

 // load as string
 $xmlstr = file_get_contents($source);
 
 echo $xmlstr."<br>";
/*
$xmlDoc = new DOMDocument();
//$xmlDoc->load( 'data.xml' );
$xmlDoc= $xmlstr;
$searchNode = $xmlDoc->getElementsByTagName( "item" );

foreach( $searchNode as $searchNode )
{
    $valueID = $searchNode->getAttribute('key');

    $xmlDate = $searchNode->getElementsByTagName( "item" );
    $valueDate = $xmlDate->item(0)->nodeValue;

    $xmlAuthorID = $searchNode->getElementsByTagName( "AuthorID" );
    $valueAuthorID = $xmlAuthorID->item(0)->nodeValue;

    echo "$valueID - $valueDate - $valueAuthorID\n";
}

*/
?>
