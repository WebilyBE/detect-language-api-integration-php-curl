# Detect Language API Integration using PHP cURL

#### Get API key https://detectlanguage.com

This code sends a request to the Detect Language API to detect the language of a given text input. It uses PHP's cURL library to make the API request.

The code first sets the text to be detected, the API key for the Detect Language API, the endpoint URL, request headers, and the request payload. It then initializes a cURL session, sets the cURL options including the request method, headers, and payload, and executes the cURL request.

If there are any errors in the cURL request, it will output an error message. Finally, the code decodes the JSON response from the API and stores it in the $result variable.

Overall, this code demonstrates how to integrate the Detect Language API into a PHP application using cURL.
