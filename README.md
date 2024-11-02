# todo-app


## Prerequisites
To install all the external dependencies, run the following command:
```zsh
/bin/bash -c "$(curl -fsSL https://php.new/install/mac)"
```

## Usage
To start the application run the following commands in the `backend` directory:
```zsh
npm install && npm run build
composer run dev
```

This will start the backend on the following url and the frontend http://localhost:5173/, and the backend http://localhost:8000/



## Database migration

To migrate the name use the following command 
```zsh 
php artisan migrate
```