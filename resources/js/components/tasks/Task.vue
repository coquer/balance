<template>
<tr>
    <td width="5%"><i class="mdi mdi-bell-ring-outline"></i></td>
    <td style="text-align: right">{{task.content}}</td>
    <td class="level-right"><button class="button is-small is-primary is-outlined" @click="deleteTask">סיימתי עם זה</button></td>
</tr>
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
