var AddTask = Vue.extend({
    template: '#add-task',

    data: {
        task: []
    },

    methods: {
        createTask: function () {
            var task = this.$get('task');
            this.$http.post('../tasks.json', task).then(function (response) {
                router.go('/');
            });
        }
    }
});