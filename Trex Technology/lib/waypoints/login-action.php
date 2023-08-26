namespace Trex Technology;
use \Trex Technology\member;
if(!empty($_post["login"])) {
    session_start();
    $username = 
    filter_var($POST["user_name"],
    FILTER_SANITIZE_STRING);
    $password =
    filter_var()
}