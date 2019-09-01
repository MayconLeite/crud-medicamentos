<template>
  <div>
    <h2><b>CADASTRO DE MEDICAMENTO:</b></h2>
    <form @submit.prevent="addPost">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><b>DESCRIÇÃO</b></label>
            <input type="text" class="form-control" v-model="post.descricao" required>
          </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><b>APRESENTAÇÃO</b></label>
            <input type="text" class="form-control" v-model="post.apresentacao" required>
          </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label><b>NOME PRINCÍPIO ATIVO</b></label>
            <input type="text" class="form-control" v-model="post.nomePrincipioAtivo" required>
          </div>
        </div>
        </div>
        
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label><b>EMPRESA:</b></label>
              <input type="text" class="form-control" v-model="post.empresa" required>
            </div>
          </div>
        </div><br />
        <div class="form-group">
          <button class="btn btn-primary"><b>REGISTRAR:</b></button>
        </div>
    </form>
  </div>
</template>

<script>
    export default {
        data(){
        return {
          post:{}
        }
    },
    methods: {
      addPost(){
        console.log(this.post);
        let uri = '/api/post/create';
        this.axios.post(uri, this.post).then((response) => {
        this.$router.push({name: 'posts'});
        });
      }
    }
  }
</script>