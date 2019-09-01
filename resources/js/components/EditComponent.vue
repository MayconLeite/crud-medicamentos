<template>
  <div>
    <h1>Edit Post</h1>
    <form @submit.prevent="updatePost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><b>DESCRIÇÃO</b></label>
            <input type="text" class="form-control" v-model="post.descricao">
          </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><b>APRESENTAÇÃO</b></label>
            <input type="text" class="form-control" v-model="post.apresentacao">
          </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><b>NOME PRINCÍPIO ATIVO</b></label>
            <input type="text" class="form-control" v-model="post.nomePrincipioAtivo">
          </div>
        </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label><b>EMPRESA:</b></label>
              <input type="text" class="form-control" v-model="post.empresa">
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary"><b>EDITAR</b></button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {

      data() {
        return {
          post: {}
        }
      },
      created() {
        let uri = `/api/post/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.post = response.data;
        });
      },
      methods: {
        updatePost() {
          let uri = `/api/post/update/${this.$route.params.id}`;
          this.axios.post(uri, this.post).then((response) => {
            this.$router.push({name: 'posts'});
          });
        }
      }
    }
</script>