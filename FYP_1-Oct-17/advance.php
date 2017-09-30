<Html>
<title>ReadingFile</title>
<body>
<?php 
$filename = "first.txt";
if(fopen($filename,"r")){
    echo "read success";
}    
$file = fopen($filename,"r");

$filesize = filesize( $filename );
$filetext = fread( $file, $filesize );
fclose( $file );

echo ( "File size : $filesize bytes" );
echo ( "<>$filetext" );
?>
</body>
</Html>