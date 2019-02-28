---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/authorize" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "http://localhost/oauth/authorize" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/authorize" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/token");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/tokens" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/tokens");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/tokens/{token_id}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/tokens/{token_id}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token/refresh" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/token/refresh");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/clients" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "http://localhost/oauth/clients" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "http://localhost/oauth/clients/{client_id}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/clients/{client_id}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/clients/{client_id}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/clients/{client_id}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/scopes" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/scopes");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/personal-access-tokens" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/personal-access-tokens" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/personal-access-tokens/{token_id}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens/{token_id}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_893ae955e8991ef06f6de91adbff0aaa -->
## api/projects
> Example request:

```bash
curl -X GET -G "http://localhost/api/projects" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/projects");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "name": "Skiles-Shields",
            "host": "234.185.97.68",
            "domain": "example.org",
            "status": 1,
            "created_at": "2019-02-21 15:21:59"
        },
        {
            "name": "Lysanne Kulas",
            "host": "146.174.73.203",
            "domain": "hotmail.com",
            "status": 1,
            "created_at": "2019-02-21 15:21:59"
        },
        {
            "name": "Marquise Langworth",
            "host": "250.204.213.236",
            "domain": "hotmail.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:00"
        },
        {
            "name": "Prof. Shanie Walker",
            "host": "137.88.253.205",
            "domain": "hotmail.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:00"
        },
        {
            "name": "Maeve Maggio",
            "host": "142.174.121.218",
            "domain": "yahoo.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:00"
        },
        {
            "name": "Prof. Korbin Durgan Sr.",
            "host": "90.147.162.151",
            "domain": "yahoo.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:06"
        },
        {
            "name": "Lessie Schumm",
            "host": "3.169.33.246",
            "domain": "gmail.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:06"
        },
        {
            "name": "Mr. Berry Prohaska Jr.",
            "host": "201.51.197.77",
            "domain": "hotmail.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:06"
        },
        {
            "name": "Ms. Elizabeth Hagenes",
            "host": "114.216.48.218",
            "domain": "gmail.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:06"
        },
        {
            "name": "Glenda Gutmann Jr.",
            "host": "142.170.157.114",
            "domain": "yahoo.com",
            "status": 1,
            "created_at": "2019-02-21 15:22:06"
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/projects?page=1",
        "last": "http:\/\/localhost\/api\/projects?page=49",
        "prev": null,
        "next": "http:\/\/localhost\/api\/projects?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 49,
        "path": "http:\/\/localhost\/api\/projects",
        "per_page": 10,
        "to": 10,
        "total": 482
    }
}
```

### HTTP Request
`GET api/projects`


<!-- END_893ae955e8991ef06f6de91adbff0aaa -->

<!-- START_d1a366aa47ee59c96780bfe89ca95bdd -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/projects" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/projects");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/projects`


<!-- END_d1a366aa47ee59c96780bfe89ca95bdd -->

<!-- START_62d96e2c27434ddb7c604817f783bed8 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/projects/{project}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/projects/{project}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "name": "Skiles-Shields",
        "host": "234.185.97.68",
        "domain": "example.org",
        "status": 1,
        "created_at": "2019-02-21 15:21:59"
    }
}
```

### HTTP Request
`GET api/projects/{project}`


<!-- END_62d96e2c27434ddb7c604817f783bed8 -->

<!-- START_1ca24c8d80ca22395fc07995d7929c34 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/projects/{project}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/projects/{project}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/projects/{project}`

`PATCH api/projects/{project}`


<!-- END_1ca24c8d80ca22395fc07995d7929c34 -->

<!-- START_70c859bdcb978e6cdba659235c2083d3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/projects/{project}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/projects/{project}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/projects/{project}`


<!-- END_70c859bdcb978e6cdba659235c2083d3 -->

<!-- START_959bbcc4baf7557a7f6208e10103d149 -->
## api/field-groups
> Example request:

```bash
curl -X GET -G "http://localhost/api/field-groups" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/field-groups");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Klein-Brakus",
            "created_at": "2019-02-26 14:39:46",
            "updated_at": "2019-02-26 14:39:46",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Batz-Swift",
            "created_at": "2019-02-26 14:39:46",
            "updated_at": "2019-02-26 14:39:46",
            "deleted_at": null
        },
        {
            "id": 3,
            "name": "Conroy and Sons",
            "created_at": "2019-02-26 14:39:46",
            "updated_at": "2019-02-26 14:39:46",
            "deleted_at": null
        },
        {
            "id": 4,
            "name": "Heaney Group",
            "created_at": "2019-02-26 14:39:47",
            "updated_at": "2019-02-26 14:39:47",
            "deleted_at": null
        },
        {
            "id": 5,
            "name": "Collins-Reilly",
            "created_at": "2019-02-26 14:42:51",
            "updated_at": "2019-02-26 14:42:51",
            "deleted_at": null
        },
        {
            "id": 6,
            "name": "Nicolas, Funk and Dooley",
            "created_at": "2019-02-26 14:42:51",
            "updated_at": "2019-02-26 14:42:51",
            "deleted_at": null
        },
        {
            "id": 7,
            "name": "Armstrong, Daniel and Miller",
            "created_at": "2019-02-26 14:42:51",
            "updated_at": "2019-02-26 14:42:51",
            "deleted_at": null
        },
        {
            "id": 8,
            "name": "Vandervort, Rosenbaum and Swift",
            "created_at": "2019-02-26 14:43:43",
            "updated_at": "2019-02-26 14:43:43",
            "deleted_at": null
        },
        {
            "id": 9,
            "name": "Cruickshank-Beatty",
            "created_at": "2019-02-26 14:43:43",
            "updated_at": "2019-02-26 14:43:43",
            "deleted_at": null
        },
        {
            "id": 10,
            "name": "Satterfield LLC",
            "created_at": "2019-02-26 14:43:43",
            "updated_at": "2019-02-26 14:43:43",
            "deleted_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/field-groups?page=1",
        "last": "http:\/\/localhost\/api\/field-groups?page=19",
        "prev": null,
        "next": "http:\/\/localhost\/api\/field-groups?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 19,
        "path": "http:\/\/localhost\/api\/field-groups",
        "per_page": 10,
        "to": 10,
        "total": 184
    }
}
```

### HTTP Request
`GET api/field-groups`


<!-- END_959bbcc4baf7557a7f6208e10103d149 -->

<!-- START_15512d4787bd2e57bd82f6775f923b50 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/field-groups" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/field-groups");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/field-groups`


<!-- END_15512d4787bd2e57bd82f6775f923b50 -->

<!-- START_8e193bfaf72a9c46e837df7c8589e826 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/field-groups/{field_group}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/field-groups/{field_group}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Klein-Brakus",
        "created_at": "2019-02-26 14:39:46",
        "updated_at": "2019-02-26 14:39:46",
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/field-groups/{field_group}`


<!-- END_8e193bfaf72a9c46e837df7c8589e826 -->

<!-- START_59f512b8adf3d56139398fac6a913f93 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/field-groups/{field_group}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/field-groups/{field_group}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/field-groups/{field_group}`

`PATCH api/field-groups/{field_group}`


<!-- END_59f512b8adf3d56139398fac6a913f93 -->

<!-- START_ee20d87cff4aa3b2a263bc2e6abdb9f7 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/field-groups/{field_group}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/field-groups/{field_group}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/field-groups/{field_group}`


<!-- END_ee20d87cff4aa3b2a263bc2e6abdb9f7 -->

<!-- START_5ad229a3f4ddbaf4f3333b1eb7f7e890 -->
## api/fields
> Example request:

```bash
curl -X GET -G "http://localhost/api/fields" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/fields");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "project_id": 1,
            "field_group_id": 1,
            "key": "Brandon Reynolds",
            "value": "Prof. Miracle Brekke MD",
            "created_at": "2019-02-27 08:28:33",
            "field_group": {
                "id": 1,
                "name": "Klein-Brakus",
                "created_at": "2019-02-26 14:39:46",
                "updated_at": "2019-02-26 14:39:46",
                "deleted_at": null
            }
        },
        {
            "id": 2,
            "project_id": 1,
            "field_group_id": 1,
            "key": "Van Goldner",
            "value": "Haleigh Jakubowski",
            "created_at": "2019-02-27 08:28:56",
            "field_group": {
                "id": 1,
                "name": "Klein-Brakus",
                "created_at": "2019-02-26 14:39:46",
                "updated_at": "2019-02-26 14:39:46",
                "deleted_at": null
            }
        },
        {
            "id": 3,
            "project_id": 35,
            "field_group_id": 9,
            "key": "Mrs. Renee Schoen III",
            "value": "Craig Rogahn",
            "created_at": "2019-02-27 09:05:52",
            "field_group": {
                "id": 9,
                "name": "Cruickshank-Beatty",
                "created_at": "2019-02-26 14:43:43",
                "updated_at": "2019-02-26 14:43:43",
                "deleted_at": null
            }
        },
        {
            "id": 4,
            "project_id": 41,
            "field_group_id": 31,
            "key": "Stewart Volkman",
            "value": "Mr. Geoffrey Hand I",
            "created_at": "2019-02-27 09:05:52",
            "field_group": {
                "id": 31,
                "name": "Quitzon-Schmidt",
                "created_at": "2019-02-27 07:32:03",
                "updated_at": "2019-02-27 07:32:03",
                "deleted_at": null
            }
        },
        {
            "id": 6,
            "project_id": 401,
            "field_group_id": 3,
            "key": "Ms. Leonie Feeney",
            "value": "Merl Grant Sr.",
            "created_at": "2019-02-27 09:05:52",
            "field_group": {
                "id": 3,
                "name": "Conroy and Sons",
                "created_at": "2019-02-26 14:39:46",
                "updated_at": "2019-02-26 14:39:46",
                "deleted_at": null
            }
        },
        {
            "id": 7,
            "project_id": 245,
            "field_group_id": 57,
            "key": "Waldo Kozey",
            "value": "Angelina Thompson",
            "created_at": "2019-02-27 09:06:47",
            "field_group": {
                "id": 57,
                "name": "Davis, Robel and Effertz",
                "created_at": "2019-02-27 07:47:36",
                "updated_at": "2019-02-27 07:47:36",
                "deleted_at": null
            }
        },
        {
            "id": 8,
            "project_id": 191,
            "field_group_id": 15,
            "key": "Prof. Winston Hintz II",
            "value": "Cathryn Muller",
            "created_at": "2019-02-27 09:06:47",
            "field_group": {
                "id": 15,
                "name": "VonRueden and Sons",
                "created_at": "2019-02-27 07:16:55",
                "updated_at": "2019-02-27 07:16:55",
                "deleted_at": null
            }
        },
        {
            "id": 10,
            "project_id": 216,
            "field_group_id": 45,
            "key": "Olaf O'Conner",
            "value": "Zetta Kirlin I",
            "created_at": "2019-02-27 09:06:48",
            "field_group": {
                "id": 45,
                "name": "Dare PLC",
                "created_at": "2019-02-27 07:45:22",
                "updated_at": "2019-02-27 07:45:22",
                "deleted_at": null
            }
        },
        {
            "id": 11,
            "project_id": 123,
            "field_group_id": 73,
            "key": "Dr. Lyric Willms I",
            "value": "Pietro Nikolaus PhD",
            "created_at": "2019-02-27 09:07:23",
            "field_group": {
                "id": 73,
                "name": "test_update_project_name",
                "created_at": "2019-02-27 08:28:32",
                "updated_at": "2019-02-27 08:28:32",
                "deleted_at": null
            }
        },
        {
            "id": 12,
            "project_id": 284,
            "field_group_id": 12,
            "key": "Loy Donnelly",
            "value": "Petra Reichert",
            "created_at": "2019-02-27 09:07:23",
            "field_group": {
                "id": 12,
                "name": "Mayert, Carroll and Abshire",
                "created_at": "2019-02-26 14:44:03",
                "updated_at": "2019-02-26 14:44:03",
                "deleted_at": null
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost\/api\/fields?page=1",
        "last": "http:\/\/localhost\/api\/fields?page=12",
        "prev": null,
        "next": "http:\/\/localhost\/api\/fields?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 12,
        "path": "http:\/\/localhost\/api\/fields",
        "per_page": 10,
        "to": 10,
        "total": 116
    }
}
```

### HTTP Request
`GET api/fields`


<!-- END_5ad229a3f4ddbaf4f3333b1eb7f7e890 -->

<!-- START_9a52c64a7e061aa0c6e1ec5cc17106a5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/fields" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/fields");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/fields`


<!-- END_9a52c64a7e061aa0c6e1ec5cc17106a5 -->

<!-- START_ae8a8fac20391b973ecfbf8c9c92729b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/fields/{field}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/fields/{field}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "project_id": 1,
        "field_group_id": 1,
        "key": "Brandon Reynolds",
        "value": "Prof. Miracle Brekke MD",
        "created_at": "2019-02-27 08:28:33",
        "field_group": {
            "id": 1,
            "name": "Klein-Brakus",
            "created_at": "2019-02-26 14:39:46",
            "updated_at": "2019-02-26 14:39:46",
            "deleted_at": null
        }
    }
}
```

### HTTP Request
`GET api/fields/{field}`


<!-- END_ae8a8fac20391b973ecfbf8c9c92729b -->

<!-- START_bccae81349c4de713135e8c850ed8954 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/fields/{field}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/fields/{field}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/fields/{field}`

`PATCH api/fields/{field}`


<!-- END_bccae81349c4de713135e8c850ed8954 -->

<!-- START_31cb71c7e1d23aef1c8213a426c3058d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/fields/{field}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/fields/{field}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/fields/{field}`


<!-- END_31cb71c7e1d23aef1c8213a426c3058d -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost/login" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/login" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/logout" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/logout");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "http://localhost/register" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/register" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/password/email" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/password/email");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset/{token}" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/password/reset/{token}");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (302):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/password/reset" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "http://localhost/home" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/home");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


