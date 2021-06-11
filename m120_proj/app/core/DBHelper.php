<?php
class DBHelper {
    
    function validateRequest($data) {
        $response = [];
        foreach ($data as $key => $value) {
          $response[$key] = trim(htmlspecialchars($value));
        }
        return $response;
      }

}

?>