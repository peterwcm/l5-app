## Documentation of Laravel App Web API

This document describes the usage of the REST API and resources provided.

## Base URL

All URLs referenced in this documentation have the following base:

```
http://l5-app.dev/api/v1
```

## JSON Response

A successful JSON response will contain a data object and its inner structure will change depends on the request.

#### Successful Request
```
{
    "data": {...}
}
```
A failed JSON response will contain an error object which has an error code and error message.

#### Failed Request
```
{
    "error": {
        "code": 401,
        "message": "Unauthorised"
    }
}
```

## Authentication

**POST** ```/auth/fb-login```

Facebook login function, create a new user if the email doesn't exist in the database. If user exists, merge extra data from Facebook if needed. Return a JWT on success.

|Name|Type|Description|
|---|---|---|
|api_key|string|The API key|
|email|string|The email of the user|
|first_name|string|The first name of the user|
|last_name|string|The last name of the user|
|username|string|The username|
|avatar|string|The URL of the avatar image|
|fb_user_id|int|The Facebook user ID|

## User

**GET** ```/me/fetch/{id}```

Fetch the specified user in JSON format.

## Resources

**GET** ```/user/get/{id}```

DESCRIPTION GOES HERE

|Name|Type|Description|
|---|---|---|
|id|int|The user ID|
