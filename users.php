<?php

 $error = '';
     if(isset($_POST['username']) && $_POST['username'] != 'ismail'){
         $error = 'username is invalid';
     }
     else if(isset($_POST['username']) && $_POST['username'] == 'ismail'){
        
     }
  

for($i =0 ; $i< 10 ; $i++){
    echo "<h1>this is header $i</h1>";
}


$userList = [
    "galamo" => "galamo amouyal 30192890 Ashdod",
    "sivan" => "sivan nator 2392890 Gaza-strip",
    "silvia" => "silvia ssas 2392890 Petah-Tikva",
    "vladimir" => "vladimir sleep 2392890 Herzrlia",
    "matan" => "matan ismail 2392890 TIRA",
    "Ko" => "Ko uril 2392890 Lud",
    "Amir" => "Amir alex 2222290 Gan-Yavne",
    "Nir" => "Nir love 999829 Um-El-Fahem"
        
];

// $users = [ 0 => [ "name"=>"gal", "lastName"=>"amouyal" ] , 
// 1 => [ "name"=>"gal", "lastName"=>"amouyal" ]] 

foreach($userList as $k => $v){
    $newUsers[$k] = explode(" ", $v);
}


?>

<h1>
User List
</h1>
   <table class="table table-stripped">
    <tr>
        <th>Name</th>
        <th>Last Name</th>
        <th>Id</th>
        <th>Location</th>
        <th></th>
        <th></th>
    </tr>

    <?php
    foreach($newUsers as $userKey => $user){
        echo "<tr>";
        foreach($user as $keyRow => $row){
            echo "<td>$row</td>";
        } 
        echo "<td><a href='userInfo.php?name=$user[0]' class='btn btn-primary fa fa-info'></a></td>";
        echo "<td><button href='userInfo.php?name=$user[0]' class='btn btn-danger fa fa-trash' onclick='del()'></button></td>";
        echo "</tr>";
    } 

    ?>

   
   </table> 


<br/>
<br/>
</div>
<h1> Users Forms</h1>

    <?php
    foreach($newUsers as $userKey => $user){
        echo "<form method='post' action='userInfo.php'>";
        echo "<input readonly type='text' name='userName' value='$user[0]'>";
        echo "<input readonly type='text' name='lastName' value='$user[1]'>";
        echo "<input readonly type='text' name='id' value='$user[2]'>";
        echo "<button class='btn btn-primary fa fa-user' >  </button>";
        echo "</form>";
    } 
    ?>

   
    <form action="" method="POST">
    <input type="text" name="username">
    <br/>
    <span> <?= $error ?></span>
    <button>
    login
    </button>
    </form>





