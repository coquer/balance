<template>
    <div class="message is-info">
        <div class="message-header" style="border-radius: 0; flex-direction: row-reverse">
            <button class="button is-small is-outlined" @click="deleteTask">סיימתי עם זה</button>
            <button class="button is-small" style="border-radius: 50%">{{place + 1}}</button>
        </div>
        <div class="message-body">
            {{task.content}}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['task', 'place'],
        methods:{
            deleteTask(){
                axios.delete('/tasks/'+ this.task.id).then(() => {
                    location.reload()
                })
            }
        }
    }
</script>
