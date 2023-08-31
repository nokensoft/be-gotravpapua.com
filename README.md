## Api Documentation

#### Messages

-   _Method post_
-   _Endpoint_

    ```
         http://127.0.0.1:8000/api/v1/messages/store
    ```

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
-   _Method get_
-   _Endpoint_

    ```
         http://127.0.0.1:8000/api/v1/adventures
    ```

-   _result_

    ```
        {"status":true,"message":"List Data Tour Adventures","data":[{"id":1,"title":"Kali Biru","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"00.jpg","status":"Publish","user_id":1,"created_at":"2023-08-31T03:52:25.000000Z","updated_at":"2023-08-31T03:52:25.000000Z","name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"password":"$2y$10$sMx52dVaqW3c6T6g3IO9LO6EhIsIQqaXqH3aCgPvhkqlQVot63.py","slug":"admin-gotrav","remember_token":null,"deleted_at":null}]}
    ```

-   _Adventure Detail_
-   _Method get_
-   _Endpoint_

    ```
         http://127.0.0.1:8000/api/v1/adventures/{id}/detail
    ```

-   _result_

    ```
        {"status":true,"message":"List Data Tour Adventure","data":[{"id":1,"title":"Kali Biru","body":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","description":"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam!","picture":"00.jpg","status":"Publish","user_id":1,"created_at":"2023-08-31T03:52:25.000000Z","updated_at":"2023-08-31T03:52:25.000000Z","name":"Admin GOTRAV","job_title":"Administrator on www.gotravpapua.com","email":"admin@gotravpapua.com","email_verified_at":null,"password":"$2y$10$sMx52dVaqW3c6T6g3IO9LO6EhIsIQqaXqH3aCgPvhkqlQVot63.py","slug":"admin-gotrav","remember_token":null,"deleted_at":null}]}
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
