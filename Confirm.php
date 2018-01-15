<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 14.01.2018
 * Time: 16:01
 */

class Confirm
{
    /**
     * Confirm constructor.
     */
    private $emailChecked;
    private $nameChecked;
    private $passwordChecked;
    public function email($emailChecked){
        $this -> emailChecked = $emailChecked;
        $re = '/^[a-z.]*[a-z]*[@][a-z.]*$/';
        if(preg_match_all($re, $this -> emailChecked, $matches, PREG_SET_ORDER, 0))
        {
           return $this -> emailChecked;
        }else{
           return false;
        }
    }
    public function name($nameChecked){
        $this -> nameChecked = $nameChecked;
        $re = '/^[a-zA-Z0-9]*$/';
        if(preg_match_all($re, $this -> nameChecked, $matches, PREG_SET_ORDER, 0))
        {
            return $this -> nameChecked;
        }else{
            return false;
        }
    }
    public function password($valueChecked){
        $this -> nameChecked = $nameChecked;
        $re = '/^[a-zA-Z0-9]*$/';
        if(preg_match_all($re, $this -> nameChecked, $matches, PREG_SET_ORDER, 0))
        {
            return $this -> nameChecked;
        }else{
            return false;
        }
        //to do MD5
    }
}