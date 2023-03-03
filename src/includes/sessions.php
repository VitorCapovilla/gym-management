<?php
    function ErrorMessage(){
        if(isset($_SESSION["ErrorMessage"])){
            $Output = "<div class='alert alert alert-danger' role='alert'>";
            $Output .= htmlentities($_SESSION["ErrorMessage"]);
            $Output .= "</div>";
            $_SESSION["ErrorMessage"] = null;
            return $Output;
        }
    }

    function SuccessMessage(){
        if(isset($_SESSION["SuccessMessage"])){
            $Output = "<div class='alert alert alert-success' role='alert'>";
            $Output .= htmlentities($_SESSION["SuccessMessage"]);
            $Output .= "</div>";
            $_SESSION["SuccessMessage"] = null;
            return $Output;
        }
    }

    function ShowErrorMessage($msg){
        $Output = "<div class='alert alert alert-danger' role='alert'>";
        $Output .= ($msg);
        $Output .= "</div>";
            
        echo $Output;
    }

    function ShowSuccessMessage($msg){
        $Output = "<div class='alert alert alert-success' role='alert'>";
        $Output .= ($msg);
        $Output .= "</div>";
           
        echo $Output;
    }


?>