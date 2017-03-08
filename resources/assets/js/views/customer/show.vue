<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title">{{model.name}}</span>
            <div>
                <router-link :to="'/customer/' + model.id + '/edit'" class="btn btn-primary btn-sm">Edit</router-link>
                <button class="btn btn-danger btn-sm" @click="remove">Delete</button>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <label>Name</label>
                    <p>{{model.name}}</p>
                    <label>Phone No</label>
                    <p>{{model.phone}}</p>
                </div>
                <div class="col-sm-4">
                    <label>Email ID</label>
                    <p>{{model.email}}</p>
                    <label>Created AT</label>
                    <p>{{model.created_at}}</p>
                </div>
                <div class="col-sm-4">
                    <label>Address</label>
                    <pre>{{model.address}}</pre>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Vue from 'vue'
    import axios from 'axios'
    export default {
        name: 'CategoryShow',
        data() {
            return {
                model: {},
                resource: 'customer',
                redirect: '/'
            }
        },
        beforeMount() {
            this.fetchData()
        },
        watch: {
            '$route': 'fetchData'
        },
        methods: {
            remove() {
                var vm = this
                axios.delete(`api/${this.resource}/${this.$route.params.id}`)
                    .then(function(response) {
                        if(response.data.deleted) {
                            vm.$router.push(vm.redirect)
                        }
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
            },
            fetchData() {
                var vm = this
                axios.get(`/api/${this.resource}/${this.$route.params.id}`)
                    .then(function(response) {
                        Vue.set(vm.$data, 'model', response.data.model)
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
            }
        }
    }
</script>