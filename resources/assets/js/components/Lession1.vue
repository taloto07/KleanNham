<template>
    <div class="container">
        
        <div class="col-md-12">
            Task: <input type="text" class="form-control" v-model="item">
            <button @click="addItem" class="btn btn-primary">Add</button>

            <h2 style="margin-top: 30px;">{{title}}</h2>
            <ul>
                <li v-for="(item, index) in items">
                    <input type="checkbox" @change="finishItem(index)">{{item}}
                </li>
            </ul>

            <h2 style="margin-top: 30px;">Done Items</h2>
            <ul>
                <li v-for="(doneItem, index) in doneItems">
                    <input type="checkbox" checked @change="undoItem(index)"><strike>{{doneItem}}</strike>
                </li>
            </ul>
            
        </div>

        <div class="col-md-12">
            <button class="btn btn-primary" @click="invokeEvent">Invoke Event</button>
        </div>

    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                title: 'To do list',
                items: [
                    'laundry', 'clothes', 'socks', 'diaper'
                ],
                doneItems: [],
                item: '',
            }
        },

        methods: {

            invokeEvent: function(){
                this.$emit('from-lession1', this.item);
            },

            addItem: function(){
                if (this.item){
                    this.items.push(this.item);
                    this.item = '';
                }
            },

            finishItem: function(index){
                var item = this.items[index];
                this.doneItems.push(item);
                this.items.splice(index, 1);
            },

            undoItem: function(index){
                var item = this.doneItems[index];
                this.items.push(item);
                this.doneItems.splice(index, 1);  
            }
            
        }
    }
</script>