<?php 
require_once 'DataSourceInterface.php';

class CustomDataSourceAdapter implements DataSourceInterface {
 private $error = null;

    public function getData(): array {
        try {
            // Pseudo code to retrieve data from Custom Source API
            $data = [
                'Custom Source' => rand(100, 500),
            ];
            return $data;
        } catch (Exception $e) {
            $this->error = 'Error retrieving data from Custom Source: ' . $e->getMessage();
            return [];
        }
    }

    public function getError(): ?string {
        return $this->error;
    }
}