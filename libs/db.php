<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28 0028
 * Time: 下午 5:59
 */


class db
{
    private $host='localhost';
    private $username='root';
    private   $pass='';
    private   $dbname='coffee';
    private   $port='3306';
     function __construct($table)
     {

       $this->db=new mysqli($this->host,$this->username,$this->pass,$this->dbname,$this->port);
       $this->db->query('set names utf8');
       $this->table=$table;
     }
     function selAll($field='*',$where=null){
         if($where){
            $sql = "select ".$field." from ".$this->table." where " . $where;
         }
         else{
             $sql = "select ".$field." from ".$this->table;
         }
         $result=$this->db->query($sql);

         return $result->fetch_all(MYSQLI_ASSOC);
     }
     function selone($field='*',$where=null){
         if($where){
             $sql = "select ".$field." from ".$this->table." where " . $where;
         }
         else{
             $sql = "select ".$field." from ".$this->table;
         }
         $result=$this->db->query($sql);

         return $result->fetch_assoc();
     }
     function del($where){
         $sql="delete from ".$this->table." where ".$where;
         $this->db->query($sql);

         return $this->db->affected_rows;
     }
     function add($field,$values){
         $sql="insert into ".$this->table."(".$field.") values ( ".$values." )";

         $this->db->query($sql);
         return $this->db->affected_rows;
     }
     function update($field,$where){
         $sql="update ".$this->table." set ".$field." where ".$where;

         $this->db->query($sql);
         return $this->db->affected_rows;

     }

    function  close(){
        $this->db->close();
    }
     

}

