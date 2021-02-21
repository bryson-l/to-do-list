import { Component, HostListener } from '@angular/core';

@Component({
  selector: 'to-do-list',
  templateUrl: './to-do-list.component.html'
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
