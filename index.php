<title>Welcome to the php</title>

<style media="screen">
body{
  margin-top: 200px;
  font-size: 22px;
  color: #DFDCFB;
  text-align: center;
  background: #281F36;
}
input{
  width:600px;
  height:60px;
  border-radius: 8px;
  color:white;
  background: #281F44;
  margin: 0;
  padding:0;
  font-size: 20px;
  text-align: center;
}

button{
  width:150px;
  height: 30px;
  background: #767394;
  border: none;
  font-size: 17px;
  color: #DFDCFB;
}
::-webkit-input-placeholder{
  color:#DFDCFB;
  font-size: 15px;
  margin-left: 20px;

}
.input_style{

}
i{
  color: black;
}
strong{
  color:red;
}

</style>

<form class="" action="index.php" method="get">
  <input class="input_style" type="text" name="name" placeholder="enter Name plz"><br><br>
  <button type="button" name="name" value="submit">submit</button>

</form>
<?php
 if (isset($_GET["name"]) && !empty($_GET["name"])){
   $input_src = $_GET["name"];
     $userName_lc = strtolower($input_src);
  $userNameCheck = preg_match("/badhan nahid/",$userName_lc);

  if($userNameCheck){
    echo "you have searched for "."<i>".$input_src. "</i> & its matched";
  }else{
    echo "You have searched for "."<i>".$input_src. "</i> & it is <strong>not</strong> matched";
  }
 }

 ?>
