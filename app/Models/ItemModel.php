<?php

  namespace App\Models;

  class ItemModel {
      public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
      }
      public static function save($data){
        $items = DB::table ('items')->insert($data);
        return $new_item;
      }
  }

?>
 
