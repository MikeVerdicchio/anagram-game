Anagram Game
============
The goal of the Anagram Game web application is to create other words out of the letters of the word given. High scores are kept so you can see how you rank against other tries.

This web application uses PHP, AJAX (JQuery), and MySQL. The Docker image contains everything necessary to run the application, including an Apache web server.

This is an assignment from the Programming Languages for Web Apps (CS 4501) special course at the University of Virginia. **If you are a current student in, or are planning to take, this version of CS 4501, it is an Honor Violation to view the code in this repository.**

1. Setup the environment:
    ```
    git clone git@github.com:MikeVerdicchio/anagram-game.git
    cd anagram-game
    docker-compose up -d anagram-db
    docker-compose up -d anagram-app
    ```

2. Navigate to **http://127.0.0.1** in your browser to see the application.