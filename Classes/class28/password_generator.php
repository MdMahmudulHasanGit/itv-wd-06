<?php
ini_set('display_errors', 1);
function lowPass(){
    for($i = 1; $i<=7; $i++){
        echo "<option value='$i' >$i</option>";
    }
}
function midPass(){
    for($i = 8; $i<=15; $i++){
        echo "<option value='$i' >$i</option>";
    }
}
function strongPass(){
    for($i = 16; $i<=24; $i++){
        echo "<option value='$i' >$i</option>";
    }
}

$symbol = "";
$number = "";
$lowercase = "";
$uppercase = "";
$_symbol = [];
$_number = [];
$_lowercase = [];
$_uppercase = [];

if(isset($_POST["symbol"]) && $_POST["symbol"] != ""){
    $symbol = $_POST["symbol"];
    $_symbol = str_split($symbol);
}
if(isset($_POST["number"]) && !empty($_POST["number"])){
    $number = $_POST["number"];
    $_number = str_split($number);
}
if(isset($_POST["lowercase"]) && !empty($_POST["lowercase"])){
    $lowercase = $_POST["lowercase"];
    $_lowercase = str_split($lowercase);
}
if(isset($_POST["uppercase"]) && !empty($_POST["uppercase"])){
    $uppercase = $_POST["uppercase"];
    $_uppercase = str_split($uppercase);
}
if(is_array($_symbol) || is_array($_number) || is_array($_lowercase) || is_array($_uppercase)){
    $fullArray = array_merge($_symbol,$_number,$_lowercase,$_uppercase);
    shuffle($fullArray);
    $password = join("",$fullArray);
}
$length = 0;

if(isset($_POST["length"]) && !empty($_POST["length"])){
    $length = $_POST["length"];
}
// echo $password;
$generatedPassword = substr($password, 0, $length);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Password Generator</title>
</head>
<style>
body{
    margin-top: 50px;
}
label{
    display: inline;
}
.equal{
    padding-right: 128px;
}
.main-label{
    padding-right: 30px;
}
select{
    margin-left: 30px;
    width: 34%;
}
fieldset, input, select, textarea {
    margin-bottom: 3.5rem;
}
#password{
    width: 42%;
    margin-top: 40px;
}
.button{
    margin-left: 35px;
}
@media screen and (max-width: 700px){
    .row .column.column-offset-20 {
    margin-left: 2%;
}
.equal{
    padding-right: 20px;
}
.main-label{
    padding-right: 0px;
}
#password{
    width: 58%;
}
}
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-80 column-offset-20">
                <h2>Generate Your Password</h2>
                <h4>Generate your strong password by Password Generator</h4>
                
<hr>
            </div>
        </div>
        <div class="row">
            <div class="column column-80 column-offset-20">
                <form action="" method="POST">
                <label for="password_length">Pssword Length: <label>
                <select name="length" id="password_length">
                
                
                <?php
                if(isset($_POST["password"]) && !empty($_POST['password'])){
                    echo "<option value='{$_POST["length"]}' selected>{$_POST["length"]}</option>";
                }
                ?>
                <option value="" disabled >Low Password</option>
                <?php lowPass(); ?>
                <option value="" disabled>Mid Password</option>
                <?php midPass(); ?>
                <option value="" disabled >Strong Password</option>

                <option value="16" <?php if(empty($_POST["password"])){ echo "selected";}?> style="display: none">16</option>
                <?php strongPass(); ?>
                </select><br>
                <label for="symbol" class="equal">Include Symbols:</label>
                <input type="checkbox" name="symbol" id="symbol" value="@#$%^&&*()-_{}[].,?!" checked>
                <label for="symbol">(e.g. @#%&*!)</label><br>
                <label for="number" class="equal">Include Numbers:</label>
                <input type="checkbox" name="number" id="number" value="1234567890" checked>
                <label for="number">(e.g. 123456)</label><br>
                <label for="lowercase" class="main-label ">Include Lowercase Characters:</label>
                <input type="checkbox" name="lowercase" id="lowercase" value="abcdefghijklmnopqrstuvwxyz" checked>
                <label for="lowercase">(e.g. abcd)</label><br>
                <label for="uppercase" class="main-label ">Include Uppercase Characters:</label>
                <input type="checkbox" name="uppercase" id="uppercase" value="ABCDEFGHIJKLMNOPQRSTUVWXYZ">
                <label for="uppercase">(e.g. ABCD)</label><br>
                <button type="submit" >Generate Password</button><a href="#" class="button" onclick="myFunction()">Copy</a><br>
                <label class="equal">Your Password:</label>
                <input type="text" name="password" id="password" value="<?= $generatedPassword; ?>">
                
                </form>
            </div>
        </div>
    </div>
                    <script>
                    function myFunction(){
                        document.getElementById("password").select();
                    }
                    </script>
</body>
</html>