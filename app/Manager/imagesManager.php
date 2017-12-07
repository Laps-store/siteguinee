<?php

namespace App\Manager;
 
class imagesManager {
    public function save($image) {
        if($image->isValid()){
            $chemin=config('images.path');
            $extension=$image->getClientOriginalExtension();
            $nom= $image->getClientOriginalName();
              return $image->move($chemin, $nom);
        }
        return false;
    }
}
