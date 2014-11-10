#############################################################################################
#  Module Starter for Opencart 1.5.1.x From HostJars http://opencart.hostjars.com			#
#############################################################################################

Congratulations on deciding to build your own module. This module is designed as a skeleton
module for those just starting out, although I still use something very similar for my modules. 
It also contains rather more documentation and instruction on building your module to give you 
a hand getting started. This documentation is in this file, as well as in the comments of the 
files included with the module.

########## OVERVIEW ###########

OpenCart is designed to follow an MVC architecture. Loosely speaking this is broken down like
so:

M - Model: This is where you will interact directly with your database, pulling data out and
restructuring it to a format that is suitable for your frontend. This will usually mainly consist
of DB queries, and little more.

V - View: This is the display side of things. The idea of the M and C is to pull as much logic out
of the view as possible, meaning simpler templates. The view files in OpenCart have the .tpl suffix.

C - Controller: This is where you will pull together the data from the Model, any config settings
saved with your install or modules, and then render it by choosing the appropriate View file(s).

L - Language: OpenCart extends MVC to MVC-L, providing an easy way of separating modules from languages.
You can use language files to store any text like headings, titles, buttons etc, so that you only 
need to adjust one file to provide translations of your module.


When writing a module for OpenCart there are two parts to consider, the way admin will interact
with your module to change settings and the way your module works/where it is displayed (middle,
left or right), and the way your module will appear on the front end of the site. These two parts
are separated in OpenCart, each appearing in a different folder. The two folders are:

admin/ - the backend
catalog/ - the frontend

When using this module to write your own modules, you should start with the admin section, adjusting
all necessary files there first and then doing the front end. This is because I have put more detailed
instructions into the backend files, and the frontend and backend directly mirror each other in the way
they work, they only differ in their purpose. Both the frontend and backend individually follow the MVC-L
architecture outlined above.

OpenCart 1.5.0 introduced some new ideas in terms of layouts. You can get up and running using this
module without really understanding layouts, but the code is there if you wish to get stuck in and 
figure them out.

########## GETTING STARTED ##########

1. Upload the admin and catalog folders included here to your OpenCart installation, over the top of the 
admin and catalog folders already there.

2. Open the following four files, and read the comments in each to figure out what's going on. There is no
magic, and it is all commented heavily. You should be able to figure out how things work by switching back
and forth between your test site admin area (under extensions -> modules) and these four files:

admin/model/module/my_module.php
admin/controller/module/my_module.php
admin/view/template/module/my_module.tpl
admin/language/english/module/my_module.php

3. Once you have the admin configured such that admin users can set the necessary settings your module 
requires, edit the following five files to provide the front end functionality:

catalog/model/module/my_module.php
catalog/controller/module/my_module.php
catalog/view/template/module/my_module.tpl
catalog/view/template/module/my_module_home.tpl
catalog/language/english/module/my_module.php

By enabling the module "My Module" in admin you will be able to view the effects of your changes to the five
files above on the front of your site.

4. You are then ready to use your module.

5. Now you should consider whether you want to sell/give away your module in the OpenCart extension store. To
prepare it for that, you can just copy the files required by your module back into the folders included in this
module. Then zip it, create an account and upload it.

Congratulations if you made it this far!

HostJars