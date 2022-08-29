<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoopingController extends Controller
{
    public function loop(){
        
        for($i=1;$i<=100;$i++){
            if($i%3 == 0 && $i%5 == 0){
              echo number_format($luasp = $this -> luaspersegi($i/3,$i/5),2,".","")."<br>";
              
            }
            else if($i%5 == 0){
               
                echo number_format( $keliling = $this ->kelilinglingakaran(3.14,$i/5),2,".","")."<br>";
            }
            else if($i%3 == 0){
                echo number_format($luas = $this->luaslingkaran(3.14,$i/3),2,".","").'<br>';
            }else{
            echo number_format($i,2,".","")."<br>";
             }
        }

    }

    public function luaslingkaran($phi,$jarijari){
        $luaslingkaran = $phi*$jarijari*$jarijari;
        
        return $luaslingkaran;
    }

    public function kelilinglingakaran($phi,$jarijari){
      

        $kelilinglingkaran = 2*$phi*$jarijari;

        return $kelilinglingkaran;
    }

    public function luaspersegi($panjang,$lebar){
       
        $luaspersegi = $panjang*$lebar;
        
        return $luaspersegi;
    }
}
