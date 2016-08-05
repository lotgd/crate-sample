# Sample Crate

## Do initial setup
```
touch db/database.sqlite
vendor/bin/daenerys database:init
vendor/bin/daenerys module:register
```

## Run the crate
```
php index.php

```

You should see something like the following output on your console:
```
[2016-08-05 04:32:27] lotgd.INFO: Bootstrap (Daenerys 🐲0.1.0). [] []
[2016-08-05 04:32:27] lotgd.DEBUG: Adding annotation directories: [] []
[2016-08-05 04:32:27] lotgd.DEBUG:   /vagrant/core/src/Models [] []
[2016-08-05 04:32:27] lotgd.DEBUG:   /vagrant/crate-sample/src [] []
[2016-08-05 04:32:27] lotgd.DEBUG:   /vagrant/module-helloworld/src [] []
[2016-08-05 04:32:28] lotgd.DEBUG: Publishing event e/lotgd/hello-world. [] []
[2016-08-05 04:32:28] lotgd.DEBUG:   Handling with LotGD\Modules\HelloWorld\Module. [] []
Hello World!
Creating a new SampleModel
Number of models: 1
```
