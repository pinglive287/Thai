<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function getProduct($id)
    {
        return $this->db->get_where('Product', array('UserID' => $id));
    }

    function conn()
    {
        return $this->load->database('pdo_db', TRUE);
    }

    function Create($data)
    {
        if ($this->db->insert('Product', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function CreatePDO($Product, $Price, $UserID, $filename1,$filename2,$filename3,$filename4,$filename5,$Image1,$Image2,$Image3,$Image4,$Image5)
    {
        $date = date('Y-m-d H:i:s');

        $sql = "INSERT INTO Product (Product, Price, UserID, FileName1, FileName2 ,FileName3 ,FileName4 ,
        FileName5 ,Image1, Image2, Image3, Image4, Image5, CreatedAt, UpdatedAt)
        VALUES (:Product, :Price,:UserID, :filename1, :filename2 ,:filename3 ,:filename4 ,:filename5,
         :Image1, :Image2, :Image3, :Image4, :Image5, '$date', '$date');";
        $stmt = $this->conn()->conn_id->prepare($sql);
        $stmt->bindParam(':Product', $Product, PDO::PARAM_STR);
        $stmt->bindParam(':Price', $Price, PDO::PARAM_STR);
        $stmt->bindParam(':UserID', $UserID, PDO::PARAM_STR);
        $stmt->bindParam(':filename1', $filename1, PDO::PARAM_STR);
        $stmt->bindParam(':filename2', $filename2, PDO::PARAM_STR);
        $stmt->bindParam(':filename3', $filename3, PDO::PARAM_STR);
        $stmt->bindParam(':filename4', $filename4, PDO::PARAM_STR);
        $stmt->bindParam(':filename5', $filename5, PDO::PARAM_STR);
        $stmt->bindParam(':Image1', $Image1, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
        $stmt->bindParam(':Image2', $Image2, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
        $stmt->bindParam(':Image3', $Image3, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
        $stmt->bindParam(':Image4', $Image4, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
        $stmt->bindParam(':Image5', $Image5, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    function getProductID($id)
    {
        return $this->db->get_where('Product', array('ID' => $id));
    }

    function Update($productID, $data)
    {
        if ($this->db->where('ID', $productID)->update('Product', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function UpdatePDO($productID, $product, $price, $UserID, $FileName1, $FileName2, $FileName3, $FileName4, $FileName5, 
        $img1, $img2, $img3, $img4, $img5)
    {
        $date = date('Y-m-d H:i:s');

        $sql = "UPDATE Product SET
                Product = :Product,
                Price = :Price,
                UserID = :UserID,
                FileName1 = :FileName1,
                FileName2 = :FileName2,
                FileName3 = :FileName3,
                FileName4 = :FileName4,
                FileName5 = :FileName5,
                Image1 = :Image1,
                Image2 = :Image2,
                Image3 = :Image3,
                Image4= :Image4,
                Image5 = :Image5
                WHERE ID = :productID";
            $stmt = $this->conn()->conn_id->prepare($sql);
            $stmt->bindParam(':productID', $productID, PDO::PARAM_STR);
            $stmt->bindParam(':Product', $product, PDO::PARAM_STR);
            $stmt->bindParam(':Price', $price, PDO::PARAM_STR);
            $stmt->bindParam(':UserID', $UserID, PDO::PARAM_STR);
            $stmt->bindParam(':FileName1', $FileName1, PDO::PARAM_STR);
            $stmt->bindParam(':FileName2', $FileName2, PDO::PARAM_STR);
            $stmt->bindParam(':FileName3', $FileName3, PDO::PARAM_STR);
            $stmt->bindParam(':FileName4', $FileName4, PDO::PARAM_STR);
            $stmt->bindParam(':FileName5', $FileName5, PDO::PARAM_STR);
            $stmt->bindParam(':Image1', $img1, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
            $stmt->bindParam(':Image2', $img2, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
            $stmt->bindParam(':Image3', $img3, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
            $stmt->bindParam(':Image4', $img4, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
            $stmt->bindParam(':Image5', $img5, PDO::PARAM_LOB, 0, PDO::SQLSRV_ENCODING_BINARY);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    function Delete($ID)
    {
        if ($this->db->delete('Product', array('ID' => $ID))) {
            return true;
        } else {
            return false;
        }
    }

    function get_data()
    {
        
        $data = $this->db->query("SELECT Product, Price,Image1, Image2, Image3, Image4, Image5, Firstname, Lastname, Member.CreatedAt
                FROM Member
                LEFT JOIN Product ON Product.UserID = Member.ID" );
        return $data;
        
    }
    
    function getProductByID($id)
    {
        return $this->db->query("SELECT * FROM Product JOIN Member On Member.ID = Product.UserID WHERE Product.UserID = '$id'");
    }

    function getUserData()
    {
    return $this->db->get('Member');
    }
    
}