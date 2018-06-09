Anagram Game
============
The goal of the Anagram Game web application is to create other words out of the letters of the word given. High scores are kept so you can see how you rank against other tries.

This web application uses PHP, AJAX (JQuery), and MySQL. The Docker image contains everything necessary to run the application, including an Apache web server.

This is an assignment from the Programming Languages for Web Apps (CS 4501) special course at the University of Virginia. **If you are a current student in, or are planning to take, this version of CS 4501, it is an Honor Violation to view the code in this repository.**

```
git clone
sudo chown 755 -R anagram-game
cd anagram-game
docker-compose up -d db
docker-compose up web
```