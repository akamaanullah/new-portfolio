<?php
namespace App\Models;

use App\Core\Model;
use App\Core\Logger;
use PDOException;

class ContactModel extends Model {
    public function create(array $data) {
        if (!$this->db) {
            // Log submission if DB not connected
            Logger::info("Contact Submission (File Log): " . json_encode($data));
            return true;
        }

        try {
            $stmt = $this->db->prepare("
                INSERT INTO inquiries (name, email, service, message, ip_address, created_at)
                VALUES (:name, :email, :service, :message, :ip, NOW())
            ");
            return $stmt->execute([
                ':name'    => $data['name'],
                ':email'   => $data['email'],
                ':service' => $data['service'] ?? '',
                ':message' => $data['message'],
                ':ip'      => $data['ip'] ?? ''
            ]);
        } catch (PDOException $e) {
            Logger::error("Contact Insert Failed: " . $e->getMessage());
            return false;
        }
    }
}
