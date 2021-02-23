import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Observable } from 'rxjs';
@Injectable()
export class UsersService {
    constructor(private http: HttpClient) { }
    apiUrl: string = 'http://localhost:8000/api';
    getUsers() {
        return this.http.get(this.apiUrl + '/users')
    }
    getUserByToken(token: string) {
        return this.http.get(this.apiUrl + '/users/' + token)
    }
}