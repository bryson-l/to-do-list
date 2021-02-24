export class TaskModel {
    id: number = 0;
    task_list_id: number = 0;
    status_id: number = 0;
    description: string | null = null;
    deleted: boolean = false;
    deleted_date: string = '';
    created_at: string = '';
    updated_at: string = '';
}