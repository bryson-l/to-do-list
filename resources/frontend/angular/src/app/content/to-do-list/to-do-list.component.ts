import { Component, HostListener, OnInit } from '@angular/core';
import { AuthGuard } from 'src/app/auth/auth-guard.component';
import { UsersService } from 'src/app/services/users.service';
import { UserModel } from 'src/app/models/user';
import { TaskListModel } from 'src/app/models/taskList';
import { TaskListsService } from 'src/app/services/taskList.service';
import { TasksService } from 'src/app/services/task.service';
import { TaskModel } from 'src/app/models/task';

@Component({
  selector: 'to-do-list',
  templateUrl: './to-do-list.component.html',
  providers: [ UsersService, TaskListsService, TasksService ]
})
export class ToDoListComponent implements OnInit {
    screenHeight: number = 0;

    users: UserModel[] = [];
    selectedUser: UserModel | null = null;
    taskLists: TaskListModel[] = [];
    selectedTaskList: TaskListModel | null = null;
    tasks: TaskModel[] = [];
  
    constructor(
        private userService: UsersService,
        private taskListService: TaskListsService,
        private taskService: TasksService
    ) {
        this.getScreenSize();
    }

    ngOnInit() {
        this.userService.getUsers()
                        .subscribe((data: any) => {
                            this.users = data
                        });
    }

    getSelectedUserLists(e: any) {
        if (this.selectedUser) {
            this.taskListService.getTaskListsByUserId(this.selectedUser.id)
                                .subscribe((data: any) => {
                                    this.taskLists = data
                                })
        }
    }

    getSelectedListTasks(e: any) {
        if (this.selectedTaskList) {
            this.taskService.getListById(this.selectedTaskList.id)
                            .subscribe(data => {
                                this.tasks = data
                            })
        }
    }

    onDeleteClick() {

    }

    onSaveClick() {
        this.taskService.saveTasks(this.tasks)
                        .subscribe(data => {
                            if (this.selectedTaskList) {
                                this.taskService.getListById(this.selectedTaskList.id)
                                                .subscribe(data => {
                                                    this.tasks = data
                                                })
                            }
                            console.log(data)
                        })
    }
  
    @HostListener('window:resize', ['$event'])
    getScreenSize(event?: any) {
        this.screenHeight = window.innerHeight;
    }  
}
