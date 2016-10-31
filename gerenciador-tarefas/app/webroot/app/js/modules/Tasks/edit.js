var TaskEdit = Vue.extend({
    template: '#task-edit',

    data: {
        task: []
    },

    ready: function () {
        this.$http.get('../tasks/'+this.$route.params.task_id+'.json').then(function (response) {
            this.$set('task', response.data.task);
        });
    },

    methods: {
        updateTask: function () {
            var task = this.$get('task');
            this.$http.post('../tasks/'+this.$route.params.task_id+'.json', task).then(function (response) {
                router.go('/');
            });
        }
    }
});