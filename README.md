#### dbqueries

##### Building container: 

```sh
docker-compose up --build && docker-compose up
```
##### Running at: 

```sh
http://localhost:8000
```
#####  Access permission:
```sh
sudo chmod 777 -R storage/
```

##### Running application migrations:
```sh
docker-compose exec app php artisan migrate
```

