<?php

header('Content-Type: application/json');

// Import classes
require_once 'GoogleAnalyticsAdapter.php';
require_once 'PositiveGuysAdapter.php';
require_once 'CustomDataSourceAdapter.php';
require_once 'DataSourceManager.php';

// Create data source manager and add data sources
$dataSourceManager = new DataSourceManager();
$dataSourceManager->addDataSource(new GoogleAnalyticsAdapter());
$dataSourceManager->addDataSource(new PositiveGuysAdapter());
$dataSourceManager->addDataSource(new CustomDataSourceAdapter());

// Handle API request
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $data = $dataSourceManager->getData();
    echo json_encode($data);
} else {
    $response = array(
        'error' => true,
        'message' => 'Invalid request method',
	'data' => []
    );
    echo json_encode($response);
}
