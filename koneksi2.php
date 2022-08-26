<?php
    class database{
       protected $database;
       public function __construct($database="sekolah3"){
        $this->database = $database;
       }
       function koneksi(){
        try{
            $db = new PDO("mysql:host=localhost;dbname=".$this->database, 'root', '');
            if($db) return $db;

        } catch (\Throwable $th){
            die("Kesalahan Pada Database :". $th);
        }
       }
       function getData($table){
        $db = $this->koneksi();
        $query = $db->prepare("SELECT * FROM " .$table);
        $query->execute();
        $data = $query->fetchAll();

        return $data;
       }
       function tambahData($table, $datas){
        $db = $this->koneksi();
        $sql = "INSERT INTO $table VAlUES(''";
        foreach($datas as $data){
            $sql .=",'$data'";
        }
        $sql .=")";

        $query = $db->query($sql);

        if($query) return $query;
       }
       function hapus($table, $data){
        $db = $this->koneksi();

        $sql = "DELETE FROM $table WHERE";

        foreach($data as $key=> $value){
            $sql .="$key = $value";
        }

        $query = $db->query($sql);

        if($query) return $query;
       }
       function update($table, $data, $where){
        $db = $this->koneksi();
        $sql = "UPDATE `$table` SET";
        foreach($data as $key => $value){
            $sql .="$key='$value',";
        }

        $potong_koma = substr($sql, 0, -1);
        $sql = "$potong_koma WHERE";
        foreach($data as $key => $value){
            $sql .="$key='$value',";
        }

        $query = $db->query($sql);

        if($query) return $query;
       }
    }
