## Api Documentation

#### Messages

-   \_Method post :http://127.0.0.1:8000/api/v1/messages/store

-   _Request_

    ```
        json :
        {
            "name" : "Samuel",
            "message" : "Wisata Papua"
        }
    ```

#### Adventures

-   _Adventures_
-   _Method get_ http://127.0.0.1:8000/api/v1/adventures

-   _result_

    ```
        {"status":true,"message":"Success","data":[{"id":1,"title":"Lorem Ipsum","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"","status":"Publish","user_id":1,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_adventur":"lorem-lpsum-1","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_user":null}}]}
    ```

-   _Adventure Detail_
-   _Method get_ http://127.0.0.1:8000/api/v1/adventures/{id}/detail

-   _result_

    ```
        {"status":true,"message":"Success","data":[{"id":1,"title":"Lorem Ipsum","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"","status":"Publish","user_id":1,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_adventur":"lorem-lpsum-1","user":{"id":1,"name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"picture":"00.jpg","slug":"admin-gotrav","status":"Publish","deleted_at":null,"created_at":"2023-09-01T05:34:22.000000Z","updated_at":"2023-09-01T05:34:22.000000Z","slug_user":null}}]}
    ```

## Dev URLs

## Artisan Commands

Buat model dengan controller, resources, factory, seeder, migration

```
    php artisan make:model NamaModel -crfsm
```

## TODOS

    ⌛ create dependent dropdown
    https://www.positronx.io/laravel-dependent-country-state-city-dropdown-with-ajax/
