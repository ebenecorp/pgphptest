 ## <p align="center"> PGPHP Application</a></p>



## About PGPHP Application

The PGPHP Application is a solution to the Picturesworks assignemnt which entails the migration of a non-OO legacy application into the Laravel/Eloquent frameworkweb application 


## The Requirement

 The requirement was to completely port ALL logic, behavior and workflows included in the non-OO legacy application and migrate it to a fresh Laravel application with working data persistency with a database.


## Functionality Imported

1. A GET request with URL (baseURL/:ID) with parameters ID which returns the existing styled HTML for a user with id "ID"

2. A POST request with URL (baseURL/api/comments) and form fields "password", "id" and "comments" which appends the value of 'comments' to the existing comments field of user with identifier 'id' provided the 'password' is a given static value.

3. A POST request with URL (baseURL/api/comments) and JSON object containing "password", "id" and "comments" which appends the value of 'comments' to the existing comments field of user with identifier 'id' provided the 'password' is a given static value.

4. A Command line execution  "php artisan user:saveComment" which essentially do the same as (2) above, too, where "ID" is the user identifier and "COMMENTS" is some amount of comments, placed in double qoutes when with spaces. No password is required for this execution.

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).


## Implemented Routes and Parameters

1. GET http://baseURL/:ID 

  Required  PARAM = ID
  Response: HTML file
  
 This is a get request that receives the ID of user's comment you wish to view and returns a html file containing user's name, image and comments.

2. POST http://baseURL/api/comments 

This is a POST request which receives either 
