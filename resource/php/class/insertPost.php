<?php
require_once('config.php');

class insertPost extends config
{
    public $post, $user;

    function __construct($post=null, $user=null)
    {
        $this->post = $post;
        $this->user = $user;
    }

    public function insertStatus(){
        $config = new config();
        $con = $config->con();
        $sql = "INSERT INTO `tbl_statuspost`(`post`, posted_by) VALUES ('$this->post','$this->user')";
        $data = $con->prepare($sql);
        $data->execute();
    }
}
?>