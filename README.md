Time Spent:<br/>
Setup of Laravel (including XAMPP, composer) initial commit - 2 hrs<br/>
Database structure - 45 min<br/>
writing database migrations - 30 min<br/>
figuring out why Apache wouldn't run - 2hrs<br/>
figuring out why migrations would return error 'unrecognized database' - 2 hrs<br/>
figuring out why migrations only partially worked - 1.5 hrs<br/>
writing models - 30 min<br/>

To run the project:<br/>
use command `php artisan serve` in the root of the repo<br/>
open `http://127.0.0.1:8000/` in web browser

### Database Structure:<br/>
![dbDiagram](https://user-images.githubusercontent.com/35579966/108271783-5782cb80-713f-11eb-8040-42cc87894afc.PNG)<br/>
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
