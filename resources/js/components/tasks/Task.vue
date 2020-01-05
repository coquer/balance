<template>
        <div class="message">
            <div class="message-body">
                <p>{{task.content}}</p>
                <button class="button is-small is-danger is-light" @click="deleteTask">סיימתי עם זה</button>
            </div>
        </div>
</template>

<script>
    export default {

        props: ['task'],

        data(){
            return{

            }
        },

        methods:{
            deleteTask(){
                axios.delete('/tasks/'+ this.task.id).then(() => {
                    location.reload()
                })
            }
        }
    }
</script>
