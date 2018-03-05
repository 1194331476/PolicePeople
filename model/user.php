<?php
class user{
    private $username;
    private $truename;
    private $sex;
 /**
     * @return the $username
     */
    public function getUsername()
    {
        return $this->username;
    }

 /**
     * @return the $truename
     */
    public function getTruename()
    {
        return $this->truename;
    }

 /**
     * @return the $sex
     */
    public function getSex()
    {
        return $this->sex;
    }

 /**
     * @param field_type $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

 /**
     * @param field_type $truename
     */
    public function setTruename($truename)
    {
        $this->truename = $truename;
    }

 /**
     * @param field_type $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

}