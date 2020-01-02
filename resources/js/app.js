/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import Buefy from "buefy";
Vue.use(Buefy)
export const EventBus = new Vue();
import TypeActivitiesList from "./components/TypeActivitiesList";
import Tasks from "./components/tasks/Tasks";
import Task from "./components/tasks/Task";
import TaskForm from "./components/tasks/TaskForm";
import Flash from "./components/Flash";
Vue.component('type-activities-list', TypeActivitiesList);
Vue.component('tasks', Tasks);
Vue.component('task', Task);
Vue.component('task-form', TaskForm);
Vue.component('flash', Flash);

const app = new Vue({
    el: '#app'
});
