<template>
        <div class="message">
            <div class="message-body">
                <p>{{task.content}}</p>
                <button class="button is-small is-primary is-outlined" @click="deleteTask">סיימתי עם זה</button>
            </div>
        </div>
</template>

<script>
    export default {

        props: ['task'],

        methods:{
            deleteTask(){
                axios.delete('/tasks/'+ this.task.id).then(() => {
                    location.reload()
                })
            }
        }
    }
</script>
