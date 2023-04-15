<?php 
require_once 'DataSourceInterface.php';

class PositiveGuysAdapter implements DataSourceInterface {
    private $error = null;

    public function getData(): array {
        try {
            // Pseudo code to retrieve data from Positive Guys API
            $data = [
                'Positive Guys' => rand(100, 500),
            ];
            return $data;
        } catch (Exception $e) {
            $this->error = 'Error retrieving data from Positive Guys: ' . $e->getMessage();
            return [];
        }
    }

    public function getError(): ?string {
        return $this->error;
    }
}