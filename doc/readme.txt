initial changes
-----------------------------------------------------
1.unzip codeigniter
2.delete user guide, license
3.create a local/doc/readme.txt file
4.create a db called ci
5.local/app/config/autoload.php-->autoload database(library) and url(helper)
6.local/app/config/config.php-->set base url
7.local/app/config/database.php-->set hostname, dbname, db-username, db-password
8.local/app/config/routes.php-->set default route by adding proper controller name
---------------------------------------------------------





Day 1 Getting Started With the Framework
-----------------------------------------
local/app/controllers/site.php-->create Site controller
                             -->create index and doSomeThing methods
                             -->createing public & private method
                             -->loading a partticular view
                             -->dynamically adding data
                             -->adding model
local/app/views/home.php-->create a simple view with html content
                        -->dynamically adding data
                        -->grabing data from db by active records
local/app/models/site_model.php-->defining the model
local/app/views/about.php-->another view page

Day completed
------------------------------------------------------
