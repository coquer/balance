<template>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title" v-if="notes.length===0">
                לא נוספו פתקים בינתיים
            </p>
        </header>
        <div class="card-table">
            <div class="content">
                <table class="table is-fullwidth is-striped">
                    <tbody>
                     <div  v-for="(task, index) in notes" :key="index">
                        <task :task="task"></task>
                    </div>
                    </tbody>
                </table>
            </div>
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
                axios.get('/tasks').then((response) => {
                    this.notes = response.data
                })
            })
        }
    }
</script>
