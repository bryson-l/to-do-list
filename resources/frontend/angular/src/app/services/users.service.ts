import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { UserModel } from '../models/user';

@Injectable()
export class UsersService {
    constructor(private http: HttpClient) { }
    apiUrl: string = 'http://localhost:8000/api';
    getUsers(): Observable<UserModel[]> {
        return this.http.get<UserModel[]>(this.apiUrl + '/users')
    }
    getUserByToken(token: string) {
        return this.http.get(this.apiUrl + '/users/' + token)
    }
}