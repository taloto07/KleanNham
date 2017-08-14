<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                lession 2
                <div>
                    From lession 1: {{data}}
                </div>
                <div>
                    <input type="text" :value="data" @input="changeData" v-model="dataVal"/>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data'],

        data: function(){
            return {
                dataVal: this.data
            }
        },
        
        methods: {
            changeData: function($event){
                this.$emit('update:data', this.dataVal);
            }
        }
        
    }
</script>