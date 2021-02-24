import { Component, HostListener, OnInit } from '@angular/core';
import { AuthGuard } from 'src/app/auth/auth-guard.component';
import { UsersService } from 'src/app/services/users.service';

@Component({
  selector: 'to-do-list',
  templateUrl: './to-do-list.component.html',
  providers: [ UsersService ]
})
export class ToDoListComponent implements OnInit {
    screenHeight: number = 0;

    users: any[] = [];
    selectedUser: {} | null = null;

    currentList: {} = {};
  
    constructor(
        private userService: UsersService,
    ) {
        this.getScreenSize();
    }

    ngOnInit() {
        this.userService.getUsers()
                        .subscribe((data: any) => {
                            this.users = data
                            console.log(this.users)
                        });
    }
  
    @HostListener('window:resize', ['$event'])
    getScreenSize(event?: any) {
        this.screenHeight = window.innerHeight;
    }  
}
