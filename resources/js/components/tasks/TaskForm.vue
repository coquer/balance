<template>
<section>
    <b-field label="מה צריך לעשות?">
        <b-input placeholder="מה צריך לעשות?" name="content" v-model="content"></b-input>
    </b-field>

    <b-field label="לאיזה נושא זה קשור?">
        <b-select placeholder="בחר/י נושא" class="rtl" name="type_id" id="type">
            <option v-for="(type, index) in types" :key="index" :value="type.id">{{type.name}}</option>
        </b-select>
    </b-field>
    <button class="button" @click="save">שלח</button>
</section>
</template>

<script>
    import {EventBus} from "../../app";

    export default {
        props: ['types'],

        data(){
            return{
                content: '',
            }
        },

        methods:{
            save(){
                const target = document.getElementById("type");
                const type = target.options[target.selectedIndex].value;
                let task = {content: this.content, type: type}

                axios.post('/tasks', {
                    content: this.content,
                    type_id: type
                }).then((response) => {

                    console.log(response)

                }).catch(function (error) {
                    console.log(error);
                });

                EventBus.$emit('addTask', task)
            }
        }

    }
</script>


<style scoped>
    .rtl{
        text-align: right;
    }
</style>
