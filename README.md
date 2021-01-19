## dbqueries

#### 1. Building the **dbqueries** container 

```sh
docker-compose up --build
```
#### 2. Start up dbqueries

```sh
docker-compose up
```

#### 3. Running at

```sh
http://localhost:8000
```

#### Useful commands

Access permission:
```sh
sudo chmod 777 -R storage/
```
Running application migrations:
```sh
docker-compose exec app php artisan migrate
```

Running application seed:
```
docker-compose exec app php artisan db:seed
```
Running migrate and seeders:
```
docker-compose exec app php artisan migrate:refresh --seed
```