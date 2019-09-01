<template >
  <div>
      <h1>LISTA DE MEDICAMENTOS</h1>
        <div class="row">
          <div class="col-md-10"></div>
          <div class="col-md-2">
            <router-link :to="{ name: 'create' }" class="btn btn-primary"><b>REGISTRAR</b></router-link>
          </div>
        </div><br />
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIÇÃO</th>
                <th>APRESENTAÇÃO</th>
                <th>NOME PRINCÍPIO ATIVO</th>
                <th>EMPRESA</th>
            </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts" :key="post.id">
                    <td>{{ post.id }}</td>
                    <td>{{ post.descricao }}</td>
                    <td>{{ post.apresentacao }}</td>
                    <td>{{ post.nomePrincipioAtivo }}</td>
                    <td>{{ post.empresa }}</td>
                    <td><router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary">Editar</router-link></td>
                    <td><button class="btn btn-danger" @click.prevent="deletePost(post.id)"><b>Deletar</b></button></td>
                </tr>
            </tbody>
        </table>
        </div>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          posts: []
        }
      },
      created() {
      let uri = '/api/posts';
      this.axios.get(uri).then(response => {
        this.posts = response.data.data;
      });
    },
    methods: {
      deletePost(id)
      {
        let uri = `/api/post/delete/${id}`;
        this.axios.delete(uri).then(response => {
        this.posts.splice(this.posts.indexOf(id), 1);
        });
      }
    }
  }
</script>