# todo-app


## Quick Start

### Prerequisites
- Ensure that git is installed on your machine. [Download Git](https://git-scm.com/downloads)
- Docker is used for the backend and database setup. [Download Docker](https://www.docker.com/products/docker-desktop)

cd todo-app && ./vendor/bin/sail up

## Usage
To start the application run the following commands in the `backend` directory:
```zsh
npm install && npm run build
composer run dev
```

```zsh
cd todo-app && ./vendor/bin/sail up
```


This will start the backend on the following url and the frontend http://localhost:5173/, and the backend http://localhost:8000/



## Database migration

To migrate the name use the following command 
```zsh 
php artisan migrate
```