import { Component, HostListener, OnInit } from '@angular/core';
import { AuthGuard } from 'src/app/auth/auth-guard.component';
import { UsersService } from 'src/app/services/users.service';
import { UserModel } from 'src/app/models/user';
import { TaskListModel } from 'src/app/models/taskList';
import { TaskListsService } from 'src/app/services/taskList.service';

@Component({
  selector: 'to-do-list',
  templateUrl: './to-do-list.component.html',
  providers: [ UsersService, TaskListsService ]
})
export class ToDoListComponent implements OnInit {
    screenHeight: number = 0;

    users: UserModel[] = [];
    selectedUser: UserModel | null = null;
    taskLists: TaskListModel[] = [];
    selectedTaskList: TaskListModel | null = null;
  
    constructor(
        private userService: UsersService,
        private taskListService: TaskListsService
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
  
    @HostListener('window:resize', ['$event'])
    getScreenSize(event?: any) {
        this.screenHeight = window.innerHeight;
    }  
}
