<template>
<section>
    <div class="list">
        <div class="list-item">
            {{task.content}}
        </div>
<!--        <div class="list-item is-active">-->
<!--            {{task.age}}-->
<!--        </div>-->
    </div>
</section>
</template>

<script>
    //import {EventBus} from "../../app";

    export default {

        props: ['task'],

        data(){
            return{

            }
        },
    }
</script>
