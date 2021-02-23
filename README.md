Time Spent:<br/>
Setup of Laravel (including XAMPP, composer) initial commit - 2 hrs<br/>
Database structure - 45 min<br/>
writing database migrations - 30 min<br/>
figuring out why Apache wouldn't run - 2hrs<br/>
figuring out why migrations would return error 'unrecognized database' - 2 hrs<br/>
figuring out why migrations only partially worked - 1.5 hrs<br/>
writing models - 30 min<br/>
writing seeders - 1 hr, this took longer than I would've expected because the migration function timestamps() creates a `created_at` and `updated_at` column and I kept trying to reference `created_date` and `updated_date` when writing the seeders<br/>
attempting to rewrite migrations to have a nullable foreign key - 1 hr<br/>
restructure of database - 1 hr, I decided to get rid of the `deleted_by` columns. While these columns could prove to be useful, in the interest of time, I've decided to skip them since I have been unable to figure out how to create a nullable foreign key with laravel migrations. I was able to do this manually in phpMyAdmin, but I couldn't find a solution that used the migration files, so anyone that would run this project would have to manually set these `deleted_by` columns to nullable. To save myself, and whoever reviews this repo, some time I have decided to forego these columns since the features it enables are not requested in the assignment document.<br/>
another restructure of database 30 min - I seperated out the priorities and priority codes so that each task can have more than one priority
Need to rewrite the migrations and seeders to reflect these changes<br/>
rewrite of migrations and seeders - 5 hours(?) - hard to say exactly how long I was stuck on this part. I rewrote the migrations and kept running into various small bugs. It was a huge relief when I ran `php artisan migrate` and it finished without errors, this was by far the hardest part I've encountered so far.<br/>
make the API - 3 hours - Once I got the first controller working the rest was really straightforward, just took a while to get that first one working the way I wanted it to. A further breakdown of this looks like 2.5 hrs debugging, .5 hrs writing rest of controllers.<br/>
add angular to the project - ~30 min - I found a tutorial on how to use Angular with laravel and followed that guide. Angular is something I feel extremely comfortable with so I don't anticipate putting it all together to make it functional taking very long.<br/>
implement authorization - ongoing - this is something I don't have much experience with. I know the basic principles of issuing a user a temporary token that can be refreshed, but I don't have experience implementing this. I'm confident that I can get this portion done, and it may even be easier than I expect. There are many, many tutorials on how to implement this, so I will follow one and wrap up this project by creating the UI in Angular.


To run the project:<br/>
will need a recent install of node.js<br/>
IN ROOT:<br/>
run `composer dump-autoload`<br/> 
followed by `composer install`
use command `php artisan serve`<br/>
TO RUN ANGULAR:<br/>
in PowerShell (or Mac equivalent) `ls` to `resources/frontend/angular`<br/>
run `npm install`
use the command `npm start` - this will open a browser tab to the Angular frontend

### Database Structure:<br/>
![dbDiagram](https://user-images.githubusercontent.com/35579966/108422253-4d76d080-7204-11eb-994f-088dcc7426f2.PNG)<br/>
I will be using `<this notation>` to designate tables. When later referenced, they will correspond to a row in that table.<br/>
This is the database structure that I will use for this To-Do List. The tool I used (dbdiagram.io) does not allow for
crow's foot notation so I will explain how each table relates to the others here. Each `users` will have an id that will
be associated with a `task_lists`. This is a one-to-many relationship as my design will allow for users to have multiple
to-do lists. The `task_lists` will have an id that is used to associate `tasks` with a specific list. This will allow task
lists to have as many items as needed and is a one-to-many relationship. The `task_status` will be associated with a task and 
will designate the status, complete or incomplete, for the associated `task`. The `task_priorities` table will be associated 
with a `tasks` row and will designate the priorities of the `tasks`. This is a many-to-many relationship as the 
specification for this assignment says that each task can have multiple priorities. Each `task_priorities` row will be associated
with a `priority_codes` row. The `priority_codes` table will hold all of the potential values for a priority for a task.
