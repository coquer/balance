<template>
<div>
    <div v-for="(task, index) in notes" :key="index">
        <task :task="task"></task>
    </div>
    <h4 class="title is-4" v-if="notes.length==0">לא נוספו פתקים בינתיים</h4>
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
                axios.get('/tasks').then((response) => {
                    this.notes = response.data
                })
            })
        }
    }
</script>
