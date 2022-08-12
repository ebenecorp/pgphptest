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

  Required  PARAM : ID
  Response: HTML file
  Errors: 402 Status code for request with invalid or unavailable ID 
  
 This is a get request that receives the ID of user's comment you wish to view and returns a html file containing user's name, image and comments.

2. POST http://baseURL/api/comments

Required Parameters: id, comments, password

sample JSON payload: 
                    {
                        "comments": "TEST COMMENTS",
                        "id": 1,
                        "password":"STATIC PASSWORD"
                    }
                    
response: Json Object of updated user data from the database 

This is a POST request which receives "password", "id" and "comments" as either Json array or Form fields request content type and appends the comments to the existing comment for the user with the specified id in the request.


## Commands

You can also append new comments to user's comments  by providing the user's ID and comment using the Artisan command below

### "php artisan user:saveComment ID COMMENT"



