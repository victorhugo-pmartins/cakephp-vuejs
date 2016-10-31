var List = Vue.extend({
    template: '#task-list',

    data: {
        tasks: []
    },

    ready: function () {
        this.$http.get('../tasks.json').then(function (response) {
            this.$set('tasks', response.data.tasks);
        });
    }
});