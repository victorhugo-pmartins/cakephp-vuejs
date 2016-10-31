var TaskDelete = Vue.extend({
    template: '#task-delete',

    data: {
        task: []
    },

    methods: {
        deleteTask: function () {
            this.$http.delete('../tasks/'+this.$route.params.task_id+'.json').then(function (response) {
                router.go('/');
            });
        }
    }
});