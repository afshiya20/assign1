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
![image](https://user-images.githubusercontent.com/99676365/186223330-7b8518a0-3548-4201-9769-0d9b7a003289.png)


Login to the mysql user made:
```
mysql -u user -p 
```
Create database and table:
  
 ![image](https://user-images.githubusercontent.com/99676365/186223486-55a10c6b-d02b-4920-b6ba-f0af1d9266a8.png)
 ![image](https://user-images.githubusercontent.com/99676365/186223770-f03aec57-aa86-489c-8246-9576ac91216b.png)


Create connection to database using:
```
$con=mysqli_connect("localhost","roohi","afshiya123","grocerydb"); 
```
To run this website go to web browser and open the following link
```
  localhost/project/index.php
```
**SHOW**

Following is the screenshot of index.php website
![image](https://user-images.githubusercontent.com/99676365/186227333-92e1645d-0799-418d-a5e3-fe25848490ed.png)

Following is the screenshot of database from mysql
![image](https://user-images.githubusercontent.com/99676365/186228019-08455437-589d-44e0-b960-1a151595e514.png)

**ADD**

Adding data in website

![image](https://user-images.githubusercontent.com/99676365/186228582-b555121f-8c7d-494f-bfa3-29b1e31bcd76.png)

Successfully reflected in mysql

![image](https://user-images.githubusercontent.com/99676365/186228698-e4133931-5e9c-4bb1-a09c-7f1fccf799c9.png)

**DELETE**

Deleting a grocery element in website

![image](https://user-images.githubusercontent.com/99676365/186229552-7bfeec2f-10ea-438f-a180-7a8f55a96651.png)

Successfully reflected in mysql

![image](https://user-images.githubusercontent.com/99676365/186229790-5ab8e669-40ad-45f8-94f7-08b98432a5ab.png)

**UPDATE**

Updating details in website

![image](https://user-images.githubusercontent.com/99676365/186230360-5e042a77-150b-4705-be11-1ec8b8de229e.png)

Successfully reflected in mysql

![image](https://user-images.githubusercontent.com/99676365/186230540-d2142d35-8c23-4af0-a3f9-3cd466ae9559.png)






