import { Component, HostListener } from '@angular/core';
import { AuthenticationService } from '../../services/authentication.service'
import { Router, ActivatedRoute } from '@angular/router';
import { first } from 'rxjs/operators';

@Component({
  selector: 'login',
  templateUrl: './login.component.html'
})
export class LoginComponent {
    screenHeight: number = 0;
    credentials: {username: string | null, password: string | null} = {username: '', password: ''}
    error: string = '';
  
    constructor(
        private authenticationService: AuthenticationService,
        private route: ActivatedRoute,
        private router: Router
    ) {
        this.getScreenSize();
        // redirect to home if already logged in
        if (this.authenticationService.currentUserValue) {
            this.router.navigate(['/']);
        }
    }
  
    @HostListener('window:resize', ['$event'])
    getScreenSize(event?: any) {
        this.screenHeight = window.innerHeight;
    }  

    onLoginClick() {
        this.authenticationService.login(this.credentials.username, this.credentials.password)
            .pipe(first())
            .subscribe(data => {
                this.router.navigate(['/']);
            },
            error => {
                this.error = error;
            })
    }
    
}
