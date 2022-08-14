<?php
session_start();
include "conn.php";

$query=" SELECT email as Email_address, issue_cat as Issue_category ,prob_type as Problem_type, message as Message from help_and_support";

$header = '';
$data ='';
$export = mysql_query ($query ) or die ( "Sql error : " . mysql_error( ) );
 
// extract the field names for header
$fields = mysql_num_fields ( $export );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $export , $i ) . "\t";
}
 
// export data
while( $row = mysql_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );
 
if ( $data == "" )
{
    $data = "\nNo Record(s) Found!\n";                        
}

$f="exportinquirydetail";
$ex=".csv";
$ch="-";
date_default_timezone_set('Asia/Calcutta');
$cdate= date('d-m-Y-h:i:s');
$efile=$f."".$ch."".$cdate."".$ex;
// allow exported file to download forcefully
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$efile");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
?>