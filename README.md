# This is a project displaying the basic functions of CRUD (Create, Read, Update, Delete).


# PROGRAMS/EXTENSIONS NEEDED TO RUN PROJECT:

-MAMP
-PHP 7.3.8
-APACHE
-DOCKER
-SQLPRO OR ANY COMPATIBLE ALTERNATIVE

-MAMP will be used to host our database and the connection will be placed in the "db_connection.php" file within the "includes" folder.

-A majority of the code will be written using PHP, so PHP >v7.3.8 will need to be installed.

-You will need access to the database. I reccommend using SQLPRO, but anything comparable will also do.

# Bootstrap 4 was also used for the modals and table.

##Set up


First thing, install MAMP:
Install MAMP from https://www.mamp.info/en/

Once MAMP is installed, change into the htdocs directory
<blockquote>
cd /MAMP/htdocs
</blockquote>

Clone the project from my GitHub:
<blockquote>
git clone https://github.com/kennywilliams07/crudproject
</blockquote>

Be sure to have SQL Pro or HeidiSQL installed for Mac or Windows respectively.

Connect to the database:
<blockquote>
Host: 127.0.0.1
Username: root
Password: root
Port: (MsSql port that will also be found in your MAMP Preferences)
</blockquote>

#The Database's name once you've connected will be 'php_project'

Once your connected to the database, you'll see a table named "albums_2019". Connect to that table, and you'll see the data.

##Using the Application

In your address bar, type:"localhost:(your port)" and select the project from your index.

You should see a form field for adding your own artist and album, and a table displaying the same data from the SQL table with an edit and delete button. From there, all you need to do is enjoy.

