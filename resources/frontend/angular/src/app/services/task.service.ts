import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { TaskModel } from '../models/task';

@Injectable()
export class TasksService {
    constructor(private http: HttpClient) { }
    apiUrl: string = 'http://localhost:8000/api';

    getListById(list_id: number): Observable<TaskModel[]> {
        return this.http.get<TaskModel[]>(this.apiUrl + '/tasks/' + list_id)
    }

    saveTasks(tasks: TaskModel[]) {
        return this.http.put(this.apiUrl + '/tasks', tasks)
    }
}