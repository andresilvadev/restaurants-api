# API DE RESTAURANTES COM Lumen PHP Framework

## Rotas

```bash
POST:   http://localhost:8000/oauth/token
GET:    http://localhost:8000/api/v1/restaurants 
GET:    http://localhost:8000/api/v1/restaurants{id}
POST:   http://localhost:8000/api/v1/restaurants
PUT:    http://localhost:8000/api/v1/restaurants/{id}
DELETE: http://localhost:8000/api/v1/restaurants/{id}
```

|METHOD |ROUTE                                         |PARAMS                                                          |
|-------|----------------------------------------------|----------------------------------------------------------------|
|POST   |http://localhost:8000/oauth/token             | grant_type, client_id, client_secret, username, password, scope|
|GET    |http://localhost:8000/api/v1/restaurants      | Show all restaurants                                           |
|GET    |http://localhost:8000/api/v1/restaurants{id}  | Show restaurants for id                                        |
|POST   |http://localhost:8000/api/v1/restaurants      | Create new restaurant                                          |
|PUT    |http://localhost:8000/api/v1/restaurants/{id} | Update restaurant for id                                       |
|DELETE |http://localhost:8000/api/v1/restaurants/{id} | Delete restaurant for id                                       |