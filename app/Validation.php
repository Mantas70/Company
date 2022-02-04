<?php
namespace DDEV;

class Validation {
    public static function validate($data){
        $validationErrors = [];
        $pattern1 = "/^[a-zA-Z]/";
        $pattern2 = "/[0-9]{8,11}/";

        if(!preg_match("$pattern1",$data['title']) || strlen($data['title']) > 100 || $data['title'] == ""){
            $validationErrors[] = "Neteisingai ivestas \"Company name\"";
        }
        if(!preg_match("$pattern2", $data['code']) || $data['code'] == "") {
            $validationErrors[] = "Neteisingai ivestas arba neivestas imones \"code\"";
        }
        if(!preg_match("$pattern2", $data['pvm_code']) || $data['pvm_code'] == "") {
            $validationErrors[] = "Neteisingai ivestas arba neivestas imones \"pvm_code\"";
        }
        if(!preg_match("/^[a-zA-Z0-9._-]/",$data['address']) || $data['address'] == ""){
            $validationErrors[] = "Neteisingai ivestas arba neivestas \"address\"";
        }
        if(!preg_match('/^[0-9]*$/',$data['phone'] || $data['phone'] == "")){
            $validationErrors[] = "Neteisingai ivestas arba neivestas \"phone number\"";
        }
        if(!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^',$data['email']) || $data['email'] == ""){
            $validationErrors[] = "Neteisignai ivestas arba neivestas \"email\"";
        }
        if(!preg_match("$pattern1",$data['activity']) || $data['activity'] == ""){
            $validationErrors[] = "Neteisingai ivestas arba neivestas \"activity\"";
        }
        if(!preg_match("$pattern1",$data['manager']) || $data['manager'] == ""){
            $validationErrors[] = "Neteisingai ivestas arba neivestas \"manager\"";
        }
        return $validationErrors;
    }
}