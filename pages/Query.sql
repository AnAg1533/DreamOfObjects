CREATE TABLE COURSE(Id int AUTO_INCREMENT
,Name varchar(255),Description varchar(255),
Price varchar(255),Link varchar(255),
CoverImage varchar(255),PRIMARY KEY(Id));


CREATE TABLE KEYWORDS(Id int AUTO_INCREMENT,keyWord varchar(255),PRIMARY KEY(Id));



CREATE TABLE RELATION(Id int AUTO_INCREMENT,CourseId int,KeyId int,PRIMARY KEY(Id), FOREIGN KEY(CourseId) REFERENCES COURSE(Id)
,FOREIGN KEY(KeyId) REFERENCES KEYWORDS(Id));


INSERT INTO COURSE(Name,Description,Price,Link,CoverImage) VALUES("HTML5 CSS3","Build Basic webpages using HTML5 and CSS3","FREE!","HtmlCourse.php","Cover2.jpg")
,("JAVASCRIPT","Make your website more dynamic using javascript","Free","JavaScriptCourse.php","jQueryCover.jpg"),
("PHP & MySQL","Create a database and link it to your WebSite using PHP & MySQL","Free","MySqlCourse.php","PHPCover1.jpg");


CREATE TABLE Member(ID int AUTO_INCREMENT,Name varchar(255),LastName varchar(255),UserName varchar(255),Email varchar(255),
Password varchar(255),Started int, finished int,PRIMARY KEY(ID));




CREATE TABLE Lesson(ID int AUTO_INCREMENT,MemberID int,CourseID int,Started DATETIME,Finished DATETIME,PRIMARY KEY(ID),
FOREIGN KEY(MemberId) REFERENCES Member(Id),Began DATETIME,Ended DATETIME,FOREIGN KEY (CourseID) REFERENCES Course(Id));

CREATE TABLE ProfileImage(ID int AUTO_INCREMENT,UserID int,Src varchar(255),PRIMARY KEY(ID),FOREIGN KEY(MemberID) REFERENCES Member(ID));
CREATE TABLE CoverImage(ID int AUTO_INCREMENT,UserID int,Src varchar(255),PRIMARY KEY(ID),FOREIGN KEY(MemberID) REFERENCES Member(ID));

CREATE TABLE Blogs(ID int AUTO_INCREMENT,PostDate DATETIME DEFAULT CURRENT_TIMESTAMP,Title varchar(255),Bio varchar(5000),
Paragraph1 varchar(5000),Paragraph2 varchar(5000),Image1 varchar(255),Image2 varchar(255),Auteur varchar(255),PRIMARY KEY(ID));

INSERT INTO Blogs(HeaderPic,Title,Bio,Paragraph1,Paragraph2,Image1,Image2,Auteur) VALUES("tumblr_n5c2de7yvB1qer734o1_500.jpg","Future?"
,
"This game that takes place in 2070 where there's pollution and robots",
"2070, somewhere on earth, what's left of it.
a big rock in the middle of nowhere,they use now robots to keep what's left of it alive.to restore it to it's formal state.
what if someone overrides the artificial intelligence, what if he wants to send the world to oblivion after he understands who and what humans really are?",
"So after he takes out every crimelord, mafia boss, or gang leader,he's now in charge of the drugs and weapons, he's now killing everyone that ever hurted him.will this pain end?will he spare the people who made him suffer, or will he send a whole city to oblivion?"
,"d2okgqy-11ee8b3a-7532-4672-96b5-aaaae7dec723.jpg","tumblr_n5c2de7yvB1qer734o1_500.jpg","full_o3_410s");



CREATE TABLE Bloger(ID int AUTO_INCREMENT,UserName varchar(255),Pass varchar(255),PRIMARY KEY(ID));