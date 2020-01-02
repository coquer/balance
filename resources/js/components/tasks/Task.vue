<template>
<section>
    <div class="list">
        <div class="list-item">
            <div class="level is-mobile">
                <div class="level-right">
                    <p>{{task.content}}</p>
                </div>
                <div class="level-left">
                    <button class="button is-small is-danger is-light" @click="deleteTask">סיימתי עם זה</button>
                </div>
            </div>
        </div>
    </div>
</section>
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
