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
mysql -u root -p 
```
Create database and table:
  
 ![image](https://user-images.githubusercontent.com/99676365/186687446-e1e9c630-75a5-4fb8-bf23-ad10def44349.png)
![image](https://user-images.githubusercontent.com/99676365/186688528-1c34f501-218e-4818-bac8-84ce0aafb2e1.png)
![image](https://user-images.githubusercontent.com/99676365/186688657-ee5ace4e-2a66-4fa3-b267-f8990f98adf8.png)



Create connection to database using:
```
$con=mysqli_connect("localhost","roohi","afshiya123","db"); 
```
To run this website go to web browser and open the following link
```
  localhost/project/index.php
```
**SHOW**

Following is the screenshot of index.php website

![image](https://user-images.githubusercontent.com/99676365/186688817-dc605cd3-d226-4295-9d1d-74a1e5259d5f.png)


Following is the screenshot of database from mysql

![image](https://user-images.githubusercontent.com/99676365/186689131-40035eb3-b60f-4025-b920-5ba8c5567bef.png)


**ADD**

Adding data in website

![image](https://user-images.githubusercontent.com/99676365/186689358-0a20688c-5140-4993-b23d-6ad9549210b5.png)


Successfully reflected in mysql

![image](https://user-images.githubusercontent.com/99676365/186689472-1fa7877c-9950-48d9-b567-60591398eba2.png)


**DELETE**

Deleting a grocery element in website

![image](https://user-images.githubusercontent.com/99676365/186689902-cd1128b5-24b6-43d3-a2be-471b9143e82b.png)


Successfully reflected in mysql

![image](https://user-images.githubusercontent.com/99676365/186690041-c54821eb-4fd1-4225-b872-cfd93d78064e.png)


**UPDATE**

Updating details in website

![image](https://user-images.githubusercontent.com/99676365/186690538-8c9e6a76-9dd7-453e-bc72-ac960d170b57.png)


Successfully reflected in mysql

![image](https://user-images.githubusercontent.com/99676365/186690831-6d73555f-76a1-49d4-b5c4-3570272d8704.png)







