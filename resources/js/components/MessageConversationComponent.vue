<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
        <b-img rounded="circle" slot="aside" blank blank-color="#ccc"
            width="48" alt="placeholder" />
        <b-card>{{ content }}</b-card> 
    </b-media> 
</template>

<script>
    export default {
        props: {
            writtenByMe: Boolean
        },
        data(){
            return{
                content:'abc'
            };
        },
        mounted() {
            console.log('Valor de writtenByMe ', this.writtenByMe)
        }
    }
</script>
