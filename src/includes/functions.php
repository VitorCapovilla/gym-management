<?php
    function Redirect_to($New_location){
        if (headers_sent()){
            echo "<script>
                    window.location = '" . $New_location . "';
                </script>";
            exit();
        }else{
            exit(header('Location: ' . $New_location));
        } 
    }
?>