<?php

class Hash{

    public function md5($md5){
        echo hash("md5", $md5);
    }
    public function sha1($sha1){
        echo hash("sha1", $sha1);
    }
    public function sha512($sha512){
        echo hash("sha512", $sha512);
    }
    public function sha224($sha224){
        echo hash("sha224", $sha224);
    }
    public function sha256($sha256){
        echo hash("sha256", $sha256);
    }
    public function sha384($sha384){
        echo hash("sha384", $sha384);
    }
}

class Decrypt{
    public function main(){
        echo "[!] Input Hash ? ";
        $h = trim(fgets(STDIN));
        echo "[!] Input Wordlist ? ";
        $w = trim(fgets(STDIN));

        $file = fopen($w, "r");
        
        while(!feof($file)) {
          $line = fgets($file);
          if(password_verify($line, $h)){
              echo "Password Found -> $line";
          }else{
              echo "Password Wrong -> $line";
          }
        }
    }
}

echo "[---------------] Hashing and Hash Cracking FajarTheGGman [---------------]\n";


echo "Type (help) To See Commands !\n";
echo "[Menu] >_ ";
$UserMenu = trim(fgets(STDIN));

if($UserMenu == "Hash"){
    $hash = new Hash();
    echo "[!] Type (help) To See Commands :)\n";
    
    while (True) {
        echo ">_ ";
        $input = trim(fgets(STDIN));
    
        if($input == "md5"){
            echo "input : ";
            $x = trim(fgets(STDIN));
            echo "Result : ";
            $hash->md5($x);
            echo "\n";
        }else if($input == "sha1"){
            echo "input : ";
            $x = trim(fgets(STDIN));
            echo "Result : ";
            $hash->sha1($x);
            echo "\n";
        }else if($input == "sha512"){
            echo "input : ";
            $x = trim(fgets(STDIN));
            echo "Result : ";
            $hash->sha512($x);
            echo "\n";
        }else if($input == "sha224"){
            echo "input : ";
            $x = trim(fgets(STDIN));
            echo "Result : ";
            $hash->sha224($x);
            echo "\n";
        }else if($input == "sha384"){
            echo "input : ";
            $x = trim(fgets(STDIN));
            echo "Result : ";
            $hash->sha384($x);
            echo "\n";
        }else if($input == "help"){
            echo "[!] List Commands\n";
            echo "- md5 (encrypt text to hash md5)\n";
            echo "- sha1 (encrypt text to hash sha1)\n";
            echo "- sha512 (encrypt text to hash sha512)\n";
            echo "- sha224 (encrypt text to hash sha224)\n";
            echo "- sha384 (encrypt text to hash sha384)\n";
        }else if($input == "exit"){
            break;
        }else{
            echo "[!] Wrong Commands ";
        }
    }
}else if($UserMenu == "Decrypt"){
    $decrypt = new Decrypt();
    $decrypt->main();
}else if($UserMenu == "exit"){
    echo "Thanks For Using My Tools :)";
}else if($UserMenu == "help"){
    echo "[!] List Commands\n";
    echo "- Hash (open hash tools)\n";
    echo "- Decrypt (open decrypt tools)\n";
}else{
    echo "[!] Wrong Commands !";
}



?>