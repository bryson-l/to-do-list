import { Component, HostListener } from '@angular/core';

@Component({
  selector: 'login',
  templateUrl: './login.component.html'
})
export class LoginComponent {
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
