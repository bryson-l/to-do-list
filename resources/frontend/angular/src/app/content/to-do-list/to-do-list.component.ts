import { Component, HostListener } from '@angular/core';
import { AuthGuard } from 'src/app/auth/auth-guard.component';

@Component({
  selector: 'to-do-list',
  templateUrl: './to-do-list.component.html',
  providers: [ AuthGuard ]
})
export class ToDoListComponent {
    screenHeight: number = 0;
    screenWidth: number = 0;
  
    constructor() {
        this.getScreenSize();
    }
  
    @HostListener('window:resize', ['$event'])
    getScreenSize(event?: any) {
        this.screenHeight = window.innerHeight;
    }  
}
