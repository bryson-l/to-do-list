Time Spent:<br/>
Setup of Laravel (including XAMPP, composer) initial commit - 2 hours<br/>
Database structure - 45 min

To run the project:<br/>
use command `php artisan serve` in the root of the repo<br/>
open `http://127.0.0.1:8000/` in web browser

###Database Structure:<br/>
![dbDiagram](https://user-images.githubusercontent.com/35579966/108241544-f399dc00-7119-11eb-8075-ea1dbb5145af.PNG)<br/>

This is the database structure that I will use for this To-Do List. The tool I used (dbdiagram.io) does not allow for
crow's foot notation so I will explain how each table relates to the others here. Each user will have an id that will
be associated with a task list. This is a one-to-many relationship as my design will allow for users to have multiple
to-do lists. The task lists will have an id that is used to associate tasks with a specific list. This will allow task
lists to have as many items as needed and is a one-to-many relationship. Lastly, I have a task priority table where each
row is associated with a task. This is a many-to-many relationship as the specification for this assignment says that
each task can have multiple priorities. These will, for the most-part, be static values as specified in the assignment,
but can be changed at a later time.
