# assign1

## **1.Website made using LAMP Stack**

### Installation
**Step 1:** Open Linux terminal and Install apache, mysql servers and php using following command
```
sudo apt install apache2
sudo apt install mysql-server
sudo apt install php libapache2-mod-php
```

**Step 2:** Set up mysql root user with password using:
```
sudo mysql_secure_installation utility 
```
**Step 3:** Set the bridge adapter.

**Step 4:** Give permission to delete the apache 2 ubuntu default page using:
```
sudo chown -R 'whoami' /var/www/html
rm index.html 
```
**Step 5:** Inside the folder /var/www/html make a project folder. Inside the folder make 2 files index.php and style.css

**Step 6:** Using the following commands download Mysql drivers (which are necessary for connection).
```
sudo apt-add-repository ppa:ondrej/php
sudo apt-get install php7.0
apt-get install php7.4-mysql
service apache2 restart
```
**Step 7:** Start the apache and mysql server
```
sudo service apache2 start 
sudo service mysql start
```
### **Setting files and Database**

**Database Setup**

Create mysql user and grant privileges to the user
```
CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';
FLUSH PRIVILEGES; 
```
Login to the mysql user made:
```
mysql -u user -p 
```
Create database and table:
```
CREATE DATABASE form;
USE form;
CREATE TABLE form 
    (id INT NOT NULL AUTO_INCREMENT, 
    name VARCHAR(50) NOT NULL, 
    email VARCHAR(50) NOT NULL, 
    message VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
    );
 ```   
**PHP File Description**

PHP and HTML code written in index.php made in assign folder in /var/www/html. The website contains a static plain html part where details of the student and the assignment is given Website also contains a html form where PHP is used to connect to the database and send the submitted form details to insert into the mysql database.

Create connection to database using:
```
$con = new mysqli($server, $username, $password, $database);
```
Get the values from the submitted form using:
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

SQL Query to insert the values into the database:
$sql = "INSERT INTO data (name, email, message) VALUES ('$name', '$email', '$message');";

Execute the query:
$con->query($sql)

After form is submitted, Thank you message is shown on the website.
For this a variable is maintained ($insert) Initially : $insert=false;

After sql query is executed successfully: $insert=true;
In the html if($insert == true) show thank you message.

Styling of the website is done using css in style.css

Check if the submitted values inserted successfully using the command on sql command line: SELECT * FROM form;

Deployment
To run this website go to web browser and open the following link
```
  localhost/assign/index.php
```
