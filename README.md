###### Please execute the following commands in order to install and initialize first:

+ cp .env.example .env
+ create a database and name it laravel_test in mysql or mariadb
+ database user is predefined as root without password in .env file if necessary please change it
+ php artisan migrate
+ php artisan db:seed

###### CRUD operations are implemented as API:
* Create Request: 

+ Api route: /api/post/create
+ Authorization method: Bearer Token
+ Request method: Post
+ Request headers:

Authorization:Bearer 388wfNlLYLv2J8WxqP4qbAghQIpMeHqlkbVgTs0BbIcbpVMxi0f8BnBowmGR
Accept:application/json
Content-Type:application/json

+ Request body example: 

{
	"title": "Hello World!",
	"body": "Hello World!"
}
------------------------------------------------------------------
* Read Request: 

+ Api route: /api/post/read
+ Authorization method: Bearer Token
+ Request method: Post
+ Request headers:

Authorization:Bearer 388wfNlLYLv2J8WxqP4qbAghQIpMeHqlkbVgTs0BbIcbpVMxi0f8BnBowmGR
Accept:application/json
Content-Type:application/json

+ Request body example: 

{
	"id": 1
}
------------------------------------------------------------------
* Update Request: 

+ Api route: /api/post/update
+ Authorization method: Bearer Token
+ Request method: Post
+ Request headers:

Authorization:Bearer 388wfNlLYLv2J8WxqP4qbAghQIpMeHqlkbVgTs0BbIcbpVMxi0f8BnBowmGR
Accept:application/json
Content-Type:application/json

+ Request body example: 

{
	"id": 1,
	"title": "new title",
	"body": "new body"
}
------------------------------------------------------------------
* Delete Request: 

+ Api route: /api/post/delete
+ Authorization method: Bearer Token
+ Request method: Post
+ Request headers:

Authorization:Bearer 388wfNlLYLv2J8WxqP4qbAghQIpMeHqlkbVgTs0BbIcbpVMxi0f8BnBowmGR
Accept:application/json
Content-Type:application/json

+ Request body example: 

{
	"id": 1
}

###### Additional Comments

1) Validation rules are defined in Request classes in App\Http\Requests
2) Methods are implemented in PostController
3) For more convenience you can import the file "test.postman_collection.json" into postman as a collection
and execute all methods
