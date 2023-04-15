<?php 
require_once 'DataSourceInterface.php';

class DataSourceManager {
    private $dataSources = array();

    public function addDataSource(DataSourceInterface $dataSource) {
        $this->dataSources[] = $dataSource;
    }

    public function removeDataSource(DataSourceInterface $dataSource) {
        $index = array_search($dataSource, $this->dataSources);
        if ($index !== false) {
            unset($this->dataSources[$index]);
        }
    }

    public function getData(): array {
	$errors = array();
        $data = array();
        foreach ($this->dataSources as $dataSource) {
            $data = array_merge($data, $dataSource->getData());
	    $error = $dataSource->getError();
	   if ($error !== null) {
             $errors[] = $error;
           }
        }

        if (!empty($errors)) {
        return ['error' => true, 'message' => implode('\n', $errors), 'data' => []];
    }

    return ['error' => false, 'message' => '', 'data' => $data];
    }
}
