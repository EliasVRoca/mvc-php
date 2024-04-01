<?php
class mainModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        try {
            $connect = $this->db->connect();
            $stmt = $connect->prepare("SELECT * FROM tbl_contacto WHERE estado_cont=1");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
}
