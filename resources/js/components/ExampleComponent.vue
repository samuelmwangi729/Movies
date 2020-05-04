<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.<br>
                        <button class="btn btn-warning">Get Data</button>
                        <button class="btn btn-danger">Post Data</button>
                        <table class="table table-bordered">
                            <thead>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                <tr v-for="item in values" :key=item.id>
                                    <td>{{item.id}}</td>
                                    <td>{{item.name}}</td>
                                    <td>{{item.email}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                values : []
            }
        },
        // methods: {
        //     getData : ()=>{
        //         var self= this;
        //        const xhr=new XMLHttpRequest();

        //        xhr.open('GET','http://127.0.0.1:8000/users');
        //        xhr.onload = () => {
        //       this.values = JSON.parse(xhr.response);

        //        }
        //        xhr.send()
        //     }
        // },
        created() {
         var self=this;

            axios.get('/users')
            .then(response =>{
                this.values=response.data;
            }).catch(error =>{
                console.log("Error", error)
            });
        },

    }
</script>
