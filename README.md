# PHP test

## 1. Installation

  - create an empty database named "phptest" on your MySQL server
  - import the dbdump.sql in the "phptest" database
  - put your MySQL server credentials in the constructor of DB class
  - you can test the demo script in your shell: "php index.php"
  - do "composer install"

## 2. Expectations

This simple application works, but with very old-style monolithic codebase, so do anything you want with it, to make it:
  - easier to work with
  - more maintainable

## 3. Comments
  used 3rd party library eloquent for easy database manipulation
  code originally made has code repition like the getInstance
  used autoloading thru composer
    - to load classes when needed no less use of require and include
    - can also add packages available from composer that will be helpful for the project
    - namespaces organizing code into logical groups, avoids class name collisions and makes it easier to locate and manage classes
  used eloquent
    - already has a setup for database connection
    - we can prevent sql injection since it sanitize the data already
    - we prevent wrong sql execution since we just need to follow the standards set by the library
    - also instead of creating an object previously eloquent returns an object for each data
  used .env for database config
    - default code exposes the host, username, database and password
    - if pushed to production can result to database hacking and if our db has sensitive data we are vulnerablt to lawsuits