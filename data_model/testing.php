$obj = new Database_Reader();
$obj->names();

if ($obj->valid_user("kevin", "password")){
   echo "valid";
} else {
   echo "invalid";
}
echo "\n";
if ($obj->valid_user("alison", "pw")){
   echo "valid";
} else {
   echo "invalid";
}
echo "\n";
if ($obj->valid_user("bobjoe", "password")){
   echo "valid";
} else {
   echo "invalid";
}
echo "\n";
if ($obj->valid_user("alison", "notpass")){
   echo "valid";
} else {
   echo "invalid";
}
echo "\n";

