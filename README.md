<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## MYSQL Commands

<table border="1">
  <tbody>
  <tr>
    <td align="middle" bgcolor="#aaaaaa" colspan="2"><font size="3"><b>Handy MySQL 
      Commands</b></font> </td></tr>
  <tr>
    <td><b>Description</b></td>
    <td><b>Command</b></td></tr>
  <tr>
    <td>To login (from unix shell) use -h only if needed.</td>
    <td>[mysql dir]/bin/mysql -h hostname -u root -p</td></tr>
  <tr>
    <td>Create a database on the sql server.</td>
    <td>create database [databasename];</td></tr>
  <tr>
    <td>List all databases on the sql server.</td>
    <td>show databases;</td></tr>
  <tr>
    <td>Switch to a database.</td>
    <td>use [db name];</td></tr>
  <tr>
    <td>To see all the tables in the db.</td>
    <td>show tables;</td></tr>
  <tr>
    <td>To see database's field formats.</td>
    <td>describe [table name];</td></tr>
  <tr>
    <td>To delete a db.</td>
    <td>drop database [database name];</td></tr>
  <tr>
    <td>To delete a table.</td>
    <td>drop table [table name];</td></tr>
  <tr>
    <td>Show all data in a table.</td>
    <td>SELECT * FROM [table name];</td></tr>
  <tr>
    <td>Returns the columns and column information pertaining to the 
      designated table.</td>
    <td>show columns from [table name];
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Show certain selected rows with the value "whatever".</td>
    <td>SELECT * FROM [table name] WHERE [field name] = "whatever";
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Show all records containing the name "Bob" AND the phone number 
      '3444444'.</td>
    <td>SELECT * FROM [table name] WHERE name = "Bob" AND phone_number = 
      '3444444';
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Show all records not containing the name "Bob" AND the phone number 
      '3444444' order by the phone_number field.</td>
    <td>SELECT * FROM [table name] WHERE name != "Bob" AND phone_number = 
      '3444444' order by phone_number;
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Show all records starting with the letters 'bob' AND the phone number 
      '3444444'.</td>
    <td>SELECT * FROM [table name] WHERE name like "Bob%" AND phone_number = 
      '3444444';
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Use a regular expression to find records. Use "REGEXP BINARY" to force 
      case-sensitivity. This finds any record beginning with a. </td>
    <td>SELECT * FROM [table name] WHERE rec RLIKE "^a$";
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Show unique records.</td>
    <td>SELECT DISTINCT [column name] FROM [table name];</td></tr>
  <tr>
    <td>Show selected records sorted in an ascending (asc) or descending 
      (desc).</td>
    <td>SELECT [col1],[col2] FROM [table name] ORDER BY [col2] DESC;</td></tr>
  <tr>
    <td>Count rows.</td>
    <td>SELECT COUNT(*) FROM [table name];
    </td><td>
  </td></tr><tr>
  </tr><tr>
    <td>Join tables on common columns.</td>
    <td>select lookup.illustrationid, lookup.personid,person.birthday from 
      lookup<br>left join person on lookup.personid=person.personid=statement to 
      join birthday in person table with primary illustration id;</td></tr>
  <tr>
    <td>Switch to the mysql db. Create a new user.
    </td><td>INSERT INTO [table name] (Host,User,Password) 
      VALUES('%','user',PASSWORD('password'));</td></tr>
  <tr>
    <td>Change a users password.(from unix shell).</td>
    <td>[mysql dir]/bin/mysqladmin -u root -h hostname.blah.org -p password 
      'new-password'</td></tr>
  <tr>
    <td>Change a users password.(from MySQL prompt).</td>
    <td>SET PASSWORD FOR 'user'@'hostname' = PASSWORD('passwordhere');</td></tr>
  <tr>
    <td>Switch to mysql db.Give user privilages for a db.</td>
    <td>INSERT INTO [table name] 
      (Host,Db,User,Select_priv,Insert_priv,Update_priv,Delete_priv,Create_priv,Drop_priv) 
      VALUES ('%','db','user','Y','Y','Y','Y','Y','N');</td></tr>
  <tr>
    <td>To update info already in a table.</td>
    <td>UPDATE [table name] SET Select_priv = 'Y',Insert_priv = 
      'Y',Update_priv = 'Y' where [field name] = 'user';</td></tr>
  <tr>
    <td>Delete a row(s) from a table.</td>
    <td>DELETE from [table name] where [field name] = 'whatever';</td></tr>
  <tr>
    <td>Update database permissions/privilages.</td>
    <td>FLUSH PRIVILEGES;</td></tr>
  <tr>
    <td>Delete a column.</td>
    <td>alter table [table name] drop column [column name];</td></tr>
  <tr>
    <td>Add a new column to db.</td>
    <td>alter table [table name] add column [new column name] varchar 
  (20);</td></tr>
  <tr>
    <td>Change column name.</td>
    <td>alter table [table name] change [old column name] [new column name] 
      varchar (50);</td></tr>
  <tr>
    <td>Make a unique column so you get no dupes.</td>
    <td>alter table [table name] add unique ([column name]);</td></tr>
  <tr>
    <td>Make a column bigger.</td>
    <td>alter table [table name] modify [column name] VARCHAR(3);</td></tr>
  <tr>
    <td>Delete unique from table.</td>
    <td>alter table [table name] drop index [colmn name];</td></tr>
  <tr>
    <td>Load a CSV file into a table.</td>
    <td>LOAD DATA INFILE '/tmp/filename.csv' replace INTO TABLE [table name] 
      FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' 
    (field1,field2,field3);</td></tr>
  <tr>
    <td>Dump all databases for backup. Backup file is sql commands to recreate 
      all db's.</td>
    <td>[mysql dir]/bin/mysqldump -u root -ppassword --opt 
      &gt;/tmp/alldatabases.sql</td></tr>
  <tr>
    <td>Dump one database for backup.</td>
    <td>[mysql dir]/bin/mysqldump -u username -ppassword --databases 
      databasename &gt;/tmp/databasename.sql</td></tr>
  <tr>
    <td>Dump a table from a database.</td>
    <td>[mysql dir]/bin/mysqldump -c -u username -ppassword databasename 
      tablename &gt; /tmp/databasename.tablename.sql</td></tr>
  <tr>
    <td>Restore database (or database table) from backup.</td>
    <td>[mysql dir]/bin/mysql -u username -ppassword databasename &lt; 
      /tmp/databasename.sql </td></tr>
  <tr>
    <td>Create Table Example 1.</td>
    <td>CREATE TABLE [table name] (firstname VARCHAR(20), middleinitial 
      VARCHAR(3), lastname VARCHAR(35),suffix VARCHAR(3),<br>officeid 
      VARCHAR(10),userid VARCHAR(15),username VARCHAR(8),email VARCHAR(35),phone 
      VARCHAR(25), groups <br>VARCHAR(15),datestamp DATE,timestamp time,pgpemail 
      VARCHAR(255)); </td></tr>
  <tr>
    <td>Create Table Example 2.</td>
    <td>create table [table name] (personid int(50) not null auto_increment 
      primary key,firstname varchar(35),middlename varchar(50),lastname 
      varchar(50) default 'bato'); </td></tr></tbody></table>
