<template>
    <div>
        <h3 class="text-center">All Posts</h3><br/>
 
        <table class="table table-bordered ">
            <thead class="bg-dark text-white">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
           
                <draggable v-model="posts" tag="tbody">
    
       <tr v-for="post in posts" :key="post.id">
                <td scope="row">{{ post.id }}</td>
                <td>{{ post.title }}</td>
                <td>{{ post.description }}</td>
                <td>{{ post.created_at }}</td>
                <td>{{ post.updated_at }}</td>
                <td>
                    <div class="btn-group " role="group">
                        <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deletePost(post.id)">Delete</button>
                    </div>
                </td>
            </tr>

</draggable>
            
           
        </table>
    </div>
</template>
 
<script>
import draggable from 'vuedraggable'
    export default {
        data() {
            return {
                posts: []
            }
        },
         components: {
            draggable,
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/posts')
                .then(response => {
                    this.posts = response.data;
                });
        },
        methods: {
            deletePost(id) {
                this.axios
                    .delete(`http://localhost:8000/api/post/delete/${id}`)
                    .then(response => {
                        let i = this.posts.map(item => item.id).indexOf(id); // find index of your object
                        this.posts.splice(i, 1)
                    });
            }
        }
    }
</script>