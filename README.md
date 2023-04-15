# api-web_statistics
Client makes a request to fetch data for visits to his website for the current month. This data is then pulled from various databases/external services to aggregate data. The result is then returned to the client. Response example: {"error": false, "message": "", data: ["Google Analytics" : 150, "Positive Guys": 5000, etc...]}

Used the Adapter pattern to implement a flexible and lightweight architecture for the API.

Files:
* index.php: The entry point of the application, which receives API requests and returns responses.
* DataSourceInterface.php: An interface defining the contract for data sources. Each data source adapter should implement this interface to provide data from its respective source.
* GoogleAnalyticsAdapter.php: An adapter for the Google Analytics data source, which retrieves data from the Google Analytics API.
* PositiveGuysAdapter.php: An adapter for the Positive Guys data source, which retrieves data from a custom API.
* CustomDataSourceAdapter.php: An adapter for a custom data source, which retrieves data from a file or another external source.
* DataSourceManager.php: A class responsible for aggregating data from all available data sources and returning the aggregated data as a response to the API request.
