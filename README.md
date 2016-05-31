# Sample Crate

## Do initial setup
```
touch db/database.sqlite
env $(cat .env | xargs) vendor/bin/daenerys module:register
```

## Run the crate
```
env $(cat .env | xargs) php index.php
```

You should see `Hello World!` appear on the console.

