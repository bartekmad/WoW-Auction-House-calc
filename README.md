WoW Auction House calc by bartekmad:

1. edit login.php with your proper servername, username, password and database name;
2. edit 7th line of load.php with your server name and api key(generated at https://dev.battle.net/);
3. edit 87th line of load.php with your server name
4. execute load.php every time u want to actualize your db. (u can set task with cronjob)
  - don't worry if u see tons of errors, simply run it again.
  - if u are using xampp/wamp and u got error like mysql server has gone away, then u have to adjust max_allowed_packet.
      = in xampp find xampp/mysql/bin/my.ini
      = in wamp find wamp/bin/mysql/mysql/my.ini
      = and set max_allowed_packet = 200M
5. enjoy
