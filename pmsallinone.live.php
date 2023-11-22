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
print $cpanel->header( "Login Log" );
//get username
$accountName = Account::name($cpanel);
//add username to file path
$file = file("/home/$accountName/.lastlogin");
?>
<table id="table" class="styled-table">
<thead>
<tr>
    <th>IP Address</th>
    <th></th>
<th>Date</th>
<th>Time</th>
    <th></th>
  </tr>
</thead>
<?php
$file = fopen("/home/$accountName/.lastlogin", "r") or die("Unable to open file!");
//output the content of .lastlogin file
while (!feof($file)){
    $data = fgets($file);
    echo "<tr><td>" . str_replace(' ','</td><td>',$data) . '</td></tr>';
}
echo '</table>';
fclose($file);
?>
<?php
    //add capenl footer
echo $cpanel->footer();
$cpanel->end();