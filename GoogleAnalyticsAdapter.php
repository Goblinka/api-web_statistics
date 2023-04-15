<?php 
require_once 'DataSourceInterface.php';

class GoogleAnalyticsAdapter implements DataSourceInterface {

private $error = null;

    public function getData(): array {
        try {
            // Pseudo code to retrieve data from Google Analytics API
            $data = [
                'Google Analytics' => rand(100, 500),
            ];
            return $data;
        } catch (Exception $e) {
            $this->error = 'Error retrieving data from Google Analytics: ' . $e->getMessage();
            return [];
        }
    }

    public function getError(): ?string {
        return $this->error;
    }
}