<!-- In web applications, HTTP methods play a crucial role in determining how data is sent to 
 and received from the server. When handling form submissions, the two most commonly used HTTP
  methods are GET and POST. They differ in how they transmit data, their intended purposes, and 
  their security implications. Here's an explanation of each method, including when and why to choose one over 
  the other: 
  GET Method
Purpose: The GET method is used to retrieve data from the server.
How It Works: When a form uses GET, the form data is appended to the URL in the form of a query string (e.g., https://example.com/search?query=hello&category=books). The data becomes part of the URL and is visible in the browser’s address bar.
Characteristics:
Data visibility: The data is visible in the URL, which makes GET less secure for transmitting sensitive information (e.g., passwords).
Caching: Since GET requests are meant to retrieve data, they can be cached by the browser or intermediate servers, making GET requests faster for repeated queries.
Limitations: URLs have length limits, so the amount of data sent using GET is restricted (though modern browsers can handle longer URLs).

When to Use GET:
Fetching Data: Use GET when you are retrieving data from the server without causing any changes to the state of the server or its data.
Search Forms: For simple search forms or filtering, GET is appropriate because the query parameters can be bookmarked or shared.-->
<form method="GET" action="/search">
  <input type="text" name="query">
  <input type="submit" value="Search">
</form>
<!-- POST Method
Purpose: The POST method is used to submit data to the server, typically to create or update resources.
How It Works: When a form uses POST, the form data is sent in the body of the HTTP request, not in the URL. This allows larger amounts of data to be sent securely and without exposing it in the browser’s address bar.
Characteristics:
Data visibility: The data is not visible in the URL, making it more secure than GET for transmitting sensitive information.
No caching: POST requests are not cached, meaning each submission is a fresh request to the server.
Data size: POST can handle much larger amounts of data compared to GET, as the data is sent in the body, not the URL.

When to Use POST:
Submitting Sensitive Data: Use POST when the form contains sensitive information such as passwords, credit card numbers, or personal details.
Modifying Data: Use POST when the form is intended to modify or create resources (e.g., user registration, submitting feedback).-->
 <form method="POST" action="/register">
  <input type="text" name="username">
  <input type="password" name="password">
  <input type="submit" value="Register">
</form>

<!-- Choosing GET vs. POST:
Use GET when:

The form is only retrieving data.
The form can be bookmarked or shared (e.g., a search result page).
No sensitive data is involved, as GET exposes data in the URL.
Use POST when:

The form modifies data on the server (e.g., creating a new user, submitting a purchase order).
Sensitive information is being submitted (e.g., login credentials, personal information).
The data being sent is large and would be truncated or cause issues in a URL.
 -->
