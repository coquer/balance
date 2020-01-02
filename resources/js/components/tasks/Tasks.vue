<template>
<div>
    <h5 class="title is-5">הפתקים שלי</h5>

    <div v-for="(task, index) in notes" :key="index">
        <task :task="task"></task>
    </div>
</div>
</template>

<script>
    import {EventBus} from "../../app";
    export default {
        props: ['tasks'],

        data(){
            return{
                notes: this.tasks
            }
        },

        mounted() {
            EventBus.$on('addTask', task =>{
                this.notes.push(task)
            })
        }
    }
</script>
