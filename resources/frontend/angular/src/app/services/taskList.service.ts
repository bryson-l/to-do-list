import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { TaskListModel } from '../models/taskList';

@Injectable()
export class TaskListsService {
    constructor(private http: HttpClient) { }
    apiUrl: string = 'http://localhost:8000/api';

    getTaskListsByUserId(userId: number) {
        return this.http.get<TaskListModel[]>(this.apiUrl + '/task_lists/' + userId)
    }
}