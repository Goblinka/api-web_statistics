# api-web_statistics
Client makes a request to fetch data for visits to his website for the current month. This data is then pulled from various databases/external services to aggregate data. The result is then returned to the client. Response example: {"error": false, "message": "", data: ["Google Analytics" : 150, "Positive Guys": 5000, etc...]}

Development Requirements:
● At the beginning, open Git repository that only contains index.php. When you finish the
task please send us link to the repository.
● You must use PHP8 with all its features that you can implement.
● App must be able to support multiple sources at once. It needs to be as simple as possible
to install a new source. You must have at least 3 different sources with some pseudo logic
to get data. Latest method where you would take data from the source you can return
some hardcoded value.
● App must be able to handle a wide variety of API methods.
● App must gracefully handle errors and exceptions.
● This project is designed as infrastructure rather than a fully fleshed application. Your
implementation should just show the process you would follow and the architecture you
would implement. You are welcome to create skeleton methods/classes, then document
the process that would happen in said method and return a static value (or call next
method, whatever).
● App must work with JSON. We really hate XML :-D, but there should be logic that supports
multiple data formats and it should be easy to pick some of them.
