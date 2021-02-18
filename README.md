Time Spent:<br/>
Setup of Laravel (including XAMPP, composer) initial commit - 2 hrs<br/>
Database structure - 45 min<br/>
writing database migrations - 30 min<br/>
figuring out why Apache wouldn't run - 2hrs<br/>
figuring out why migrations would return error 'unrecognized database' - 2 hrs<br/>
figuring out why migrations only partially worked - 1.5 hrs<br/>
writing models - 30 min<br/>
writing seeders - 1 hr, this took longer than I would've expeected because the migration function timestamps() creates a `created_at` and `updated_at` column and I kept trying to reference `created_date` and `updated_date` when writing the seeders<br/>
attempting to rewrite migrations to have a nullable foreign key - 1 hr<br/>
restructure of database - 1 hr, I decided to get rid of the `deleted_by` columns. While these columns could prove to be useful, in the interest of time, I've decided to skip them since I have been unable to figure out how to create a nullable foreign key with laravel migrations. I was able to do this manually in phpMyAdmin, but I couldn't find a solution that used the migration files, so anyone that would run this project would have to manually set these `deleted_by` columns to nullable. To save myself, and whoever reviews this repo, some time I have decided to forego these columns since the features it enables are not requested in the assignment document.


To run the project:<br/>
use command `php artisan serve` in the root of the repo<br/>
open `http://127.0.0.1:8000/` in web browser

### Database Structure:<br/>
![dbDiagram](https://user-images.githubusercontent.com/35579966/108421099-ae9da480-7202-11eb-85ef-da685f511ae3.PNG)<br/>
I will be using `<this notation>` to designate tables. When later referenced, they will correspond to a row in that table.<br/>
This is the database structure that I will use for this To-Do List. The tool I used (dbdiagram.io) does not allow for
crow's foot notation so I will explain how each table relates to the others here. Each `users` will have an id that will
be associated with a `task_lists`. This is a one-to-many relationship as my design will allow for users to have multiple
to-do lists. The `task_lists` will have an id that is used to associate `tasks` with a specific list. This will allow task
lists to have as many items as needed and is a one-to-many relationship. The `task_priorities` table will be associated 
with a `tasks` row and will designate the priorities of the `tasks`. This is a many-to-many relationship as the 
specification for this assignment says that each task can have multiple priorities. These will, for the most-part, be 
static values as specified in the assignment, but can be changed at a later time. Lastly, the `task_status` will be 
associated with a task, similar to the `task_priorties` table, and will designate the status for the associated `task`.
