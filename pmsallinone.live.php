<?php
require '/usr/local/cpanel/php/cpanel.php';
//detect username
class Account
{
    public static function name($cpanel)
    {
        return $cpanel->cpanelprint('$user');
    }
}

$cpanel = new CPANEL();
//plugin name on top of page
print $cpanel->header( "PMS All In One Installer!" );
//get username
$accountName = Account::name($cpanel);

//echo $accountName;
exec("cd /home/" . $accountName. "/repositories && pwd",$output);
print_r($output);

exec("git clone https://xmltech:ATBB6LB7eg4Nw3TVvQfeT2umUru69DD05C56@bitbucket.org/xmltech/allinone-v2.git", $output);
print_r($output);
//add username to file path
// $file = file("/home/$accountName/.lastlogin");
?>

<!-- <table id="table" class="styled-table">
<thead>
<tr>
    <th>IP Address</th>
    <th></th>
<th>Date</th>
<th>Time</th>
    <th></th>
  </tr>
</thead> -->
<?php
// $file = fopen("/home/$accountName/.lastlogin", "r") or die("Unable to open file!");
// //output the content of .lastlogin file
// while (!feof($file)){
//     $data = fgets($file);
//     echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
// }
// echo '</table>';
// fclose($file);
?>
<?php
    //add capenl footer
echo $cpanel->footer();
$cpanel->end();