function findTask(taskId) {
    return tasks[findTaskKey(taskId)];
};

function findTaskKey(taskId) {
    for (var key = 0; key < tasks.length; key++) {
        if (tasks[key].id == taskId) {
            return key;
        }
    }
};

var router = new VueRouter();
router.map({
    '/': {component: List},
    '/add-task': {component: AddTask},
    '/task/:task_id/edit': {component: TaskEdit, name: 'task-edit'},
    '/task/:task_id/delete': {component: TaskDelete, name: 'task-delete'}
})
.start(Vue.extend({}), '#app');